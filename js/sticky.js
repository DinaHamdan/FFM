window.onscroll = function () { myFunction() };

var menuBar = document.querySelector("header");
var sticky = menuBar.offsetTop;

function myFunction() {
    if (window.scrollY >= sticky) {
        menuBar.classList.add("sticky")
        console.log('scroll worked')
    } else {
        menuBar.classList.remove("sticky");
    }
}