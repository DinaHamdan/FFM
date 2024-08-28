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
    fireGallery.scrollLeft -= 300;
    fireGallery.style.scrollBehavior = 'smooth';

});

forwardButton.addEventListener('click', () => {
    fireGallery.scrollLeft += 300;
    fireGallery.style.scrollBehavior = 'smooth';

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
    ledGallery.scrollLeft -= 300;
    ledGallery.style.scrollBehavior = 'smooth';

});

forwardBtn.addEventListener('click', () => {
    ledGallery.scrollLeft += 300;
    ledGallery.style.scrollBehavior = 'smooth';

})
