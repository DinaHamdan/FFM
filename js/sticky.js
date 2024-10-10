window.onscroll = function () { myFunction() };
var menuBar = document.querySelector("header");

//var menuBar = document.getElementById("menuBar");
var sticky = menuBar.offsetHeight;

function myFunction() {
    if (window.scrollY >= sticky) {
        menuBar.classList.add("sticky")
    } else {
        menuBar.classList.remove("sticky");
    }
}


//Legal mentions

var condition = document.querySelector('.conditions');
var legalInfo = document.querySelector('#legal-rights-info');

/* condition.addEventListener('click', () => {
    legalInfo.classList.add("showLegalRight");
    legalInfo.style.display = "block";
    console.log('condition working')
}); */

/* if (legalInfo.style.display === "block");
{
    condition.addEventListener('click', () => {
        legalInfo.style.display = "none";

    })
}; */

function show() {

    var legalInfo = document.querySelector('#legal-rights-info');
    if (legalInfo.style.display === "none") {
        legalInfo.style.display = "block";
        legalInfo.classList.add("showLegalRight");

    } else {
        legalInfo.style.display = "none";
    }


}