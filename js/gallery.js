let gallery = document.querySelector('#fire-prop-container');
let backButton = document.querySelector('.back-scroll');
let forwardButton = document.querySelector('.forward-scroll');

gallery.addEventListener('wheel', (event) => {
    event.preventDefault();
    gallery.scrollLeft += event.deltaY;
    gallery.style.scrollBehavior = "auto";

});

backButton.addEventListener('click', () => {
    gallery.scrollLeft -= 900;
    gallery.style.scrollBehavior = 'auto';

});

forwardButton.addEventListener('click', () => {
    gallery.scrollLeft += 900;
    gallery.style.scrollBehavior = 'auto';

})
