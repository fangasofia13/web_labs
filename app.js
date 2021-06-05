const resultBtm = document.getElementById('resultBtn');
const res = document.getElementById('res');

resultBtm.addEventListener("click", function () {
    let h = document.getElementById('h').value;
    let k = document.getElementById('k').value;
    let c = document.getElementById('c').value;
    let r = document.getElementById('r').value;

    let first_result = Math.sqrt(Math.pow(r, 2) + k * Math.log10(c)) + Math.pow(Math.tan(h), 2);

    let second_result = Math.pow(r, 2) + Math.pow(Math.cos(h), 2) + Math.pow(Math.E, k);

    res.innerHTML = "w = " + first_result.toFixed(4) + " || " + "z = " + second_result.toFixed(4);

});