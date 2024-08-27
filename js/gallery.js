//Javascript for Fire Gallery
let fireGallery = document.querySelector('#fire-prop-container');
let backButton = document.querySelector('.back-scroll');
let forwardButton = document.querySelector('.forward-scroll');

fireGallery.addEventListener('wheel', (evt) => {
    evt.preventDefault();
    fireGallery.scrollLeft += evt.deltaY;
    fireGallery.style.scrollBehavior = 'auto';

});

backButton.addEventListener('click', () => {
    fireGallery.scrollLeft -= 100;
    fireGallery.style.scrollBehavior = 'auto';

});

forwardButton.addEventListener('click', () => {
    fireGallery.scrollLeft += 100;
    fireGallery.style.scrollBehavior = 'auto';

})


//Javascript for LED Gallery

let ledGallery = document.querySelector('#led-prop-container');
let backBtn = document.querySelector('.back-button');
let forwardBtn = document.querySelector('.forward-button');

ledGallery.addEventListener('wheel', (evt) => {
    evt.preventDefault();
    ledGallery.scrollLeft += evt.deltaY;
    ledGallery.style.scrollBehavior = 'auto';

});

backBtn.addEventListener('click', () => {
    ledGallery.scrollLeft -= 100;
    ledGallery.style.scrollBehavior = 'smooth';

});

forwardBtn.addEventListener('click', () => {
    ledGallery.scrollLeft += 100;
    ledGallery.style.scrollBehavior = 'smooth';

})
