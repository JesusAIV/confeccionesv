const slider = new Slider('.slider', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.slider-pagination',
        clickable: 'true'
    },

    // Navigation arrows
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
});