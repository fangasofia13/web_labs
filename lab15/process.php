<?php

$id= 0;
$name = '';
$phone = '';
$address = '';
$update = false;

$mysqli = new mysqli('localhost', 'root', 'root', 'web_lab') or die(mysqli_error($mysqli));

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $mysqli->query("INSERT INTO lab15 (name, phone, address) VALUES('$name', '$phone', '$address')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "ducccess"; 

    header('location: index.php');
}

if(isset($_GET['delete'])) {
    $id= $_GET['delete'];

    $mysqli->query("DELETE FROM lab15 WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger"; 
    
    header('location: index.php');
} 

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;

    $result = $mysqli->query("SELECT * FROM lab15 WHERE id = $id") or die($mysqli->error);

    if($result == 1) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $phone = $row['phone'];
        $address = $row['address'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $mysqli->query("UPDATE lab15 SET name='$name', phone = '$phone', address='$address' WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] =  "warning";

    header('location: index.php');
}


?>