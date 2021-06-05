const infoBtn = document.getElementById("infoBtn");
const allInfo = document.getElementById("result");
const whiteBtn = document.getElementById('btn1');
const blackBtn = document.getElementById('btn2');
const modalText = document.getElementById("modalText");


// infoBtn.addEventListener("click", function () {
//     let sur = document.getElementById('surname').value;
//     let phone = document.getElementById('phone').value;
//     let adress = document.getElementById('adress').value;

//     allInfo.textContent = 'Hello ' + sur + "!"
//         + "Your namber is " + "'" + phone + "'" + " and you live at " + "'" + adress + "'";
//     return false;
// });

whiteBtn.addEventListener("click", function () {
    document.body.style.backgroundColor = 'pink';
});

blackBtn.addEventListener("click", function () {
    document.body.style.backgroundColor = '#2DE6ED';
});

// modal

var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];

infoBtn.onclick = function () {
    let sur = document.getElementById('surname').value;
    let phone = document.getElementById('phone').value;
    let adress = document.getElementById('adress').value;
    var text = `Hello ${sur}! Your number is : ${phone}. You live at ${adress}.`;

    modal.style.display = "block";
    modalText.textContent = text;
    return false;
};

span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function () {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};






