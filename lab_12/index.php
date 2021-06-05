<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="" value="<?php echo @$data["name"]; ?>"><br>

        <label for="phone_number">Phone number</label><br>
        <input type="text" name="phone_number" placeholder=""><br>

        <label for="email">Email</label><br>
        <input type="text" name="email" placeholder=""><br>

        <button type="submit" name="enter_btn">Check</button>
    </form>
</body>
</html>

<?php
$data = $_POST;
$name = $data["name"];
$phone = $data["phone_number"];
$email = $data["email"];

function error($error) {
    echo ("<div class='red'>$error</div>");
}

function sucsses($sucsses) {
    echo ("<div class='green'>$sucsses</div>");
}

function validate_name($name){
    $name_2 = substr($name, strlen($word)-2, 2);
    
    if($name_2 == "ko") {
        $sucsses = "The name ends in -ko";
        sucsses($sucsses);
    } else {
        $error = "The name don&#39t end in -ko";
        error($error);
    }

}

function validate_phone_number($phone) {
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    
    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        $error = "Phone isn't correct";
        error($error);
    } else {
        $sucsses = "Phone is correct";
        sucsses($sucsses);
    }
}

function validate_email($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email isn't correct";
        error($error);
    } else {
        $sucsses = "Email is correct";
        sucsses($sucsses);
    }
}


// form validation

if(isset($data['enter_btn'])) {
    // check name
    validate_name($name);

    // check phone number
    validate_phone_number($phone);

    // chech email
    validate_email($email);
};
?>