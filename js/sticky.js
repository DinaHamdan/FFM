window.onscroll = function () { myFunction() };
let menuBar = document.querySelector("header");

//let menuBar = document.getElementById("menuBar");
let sticky = menuBar.offsetHeight;

function myFunction() {
    if (window.scrollY >= sticky) {
        menuBar.classList.add("sticky")
    } else {
        menuBar.classList.remove("sticky");
    }
}


//Legal mentions

let condition = document.querySelector('.conditions');
let legalInfo = document.querySelector('#legal-rights-info');



function show() {

    let legalInfo = document.querySelector('#legal-rights-info');
    if (legalInfo.style.display === "none") {
        legalInfo.style.display = "block";
        legalInfo.classList.add("showLegalRight");

    } else {
        legalInfo.style.display = "none";
    }


}