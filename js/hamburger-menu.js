/* I might remove this logo 3 changed id*/






let burgerButton = document.querySelector('#logo');
let navBar = document.querySelector('#menuBar');
let menuList = document.querySelector('#menu-mobile');
let logo = document.querySelector('#full-logo-small');

burgerButton.addEventListener('click', function () {
    // Bascule la classe active pour afficher ou masquer le menu
    burgerButton.classList.toggle('active');

    // Masque les point lorsque le menu est ouvert
    if (burgerButton.classList.contains('active')) {
        menuList.style.display = 'flex';
        logo.style.display = 'none';
    } else {
        menuList.style.display = 'none'; // réaffiche les points lorsque le menu est fermé
        logo.style.display = 'inline-block';

    }
});


/* burgerButton.addEventListener('click', () => {
    let menuList = document.querySelector('#menu');
    if (menuList.style.display === "flex") {
        menuList.style.display = "none";
        console.log("banane");
        menuList.classList.remove("menuColumn");

    }
    else {

        console.log("patate");
        navBar.style.position = "absolute";
        menuList.style.display = "flex";
        menuList.classList.add("menuColumn");
    }
});
 */
/* 
function hamburger() {
    let menuList = document.querySelector('#menu');
    let navBar = document.querySelector('#menuBar');
    console.log("patate");

    if (menuList.style.display === "none") {
        navBar.style.position = "absolute";
        menuList.style.display = "flex";
        menuList.classList.add("menuColumn");
        console.log("patate");

    } else {
        navBar.style.position = "static";
        menuList.style.position = "none";
        // menuList.classList.remove("menuColumn");

    }


} */

/* // sélectionne les élément
let burger = document.querySelector('.burger'); // Sélecteur du bouton burger
let menuBurger = document.querySelector('.menu-burger-hidden ul'); // Sélecteur du menu burger
let pointsDisplay = document.querySelector('.points-display'); // Sélecteur de l'afichage des points

// Ajoute un événement au clic sur le bouton burger
burger.addEventListener('click', function () {
    // Bascule la classe active pour afficher ou masquer le menu
    menuBurger.classList.toggle('active');
    burger.classList.toggle('active');

    // Masque les point lorsque le menu est ouvert
    if (burger.classList.contains('active')) {
        pointsDisplay.style.display = 'none';
    } else {
        pointsDisplay.style.display = 'flex'; // réaffiche les points lorsque le menu est fermé
    }
}); */