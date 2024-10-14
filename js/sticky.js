/* window.onscroll = function () { myFunction() };
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
 */
let menuBar = document.querySelector("header");

let prevScrollPos = window.scrollY;

window.addEventListener('scroll', function () {
    // current scroll position
    const currentScrollPos = window.scrollY;
    if (prevScrollPos > currentScrollPos) {
        // user has scrolled up
        console.log('up');
        menuBar.classList.add('sticky');
    } else {
        console.log('down');

        // user has scrolled down
        menuBar.classList.remove('sticky');
    }
    // update previous scroll position
    prevScrollPos = currentScrollPos;
});





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