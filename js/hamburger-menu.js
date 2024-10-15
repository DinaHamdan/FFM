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

