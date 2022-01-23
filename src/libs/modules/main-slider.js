import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';

function init() {

    Swiper.use([Navigation, Pagination, EffectFade]);

    const mainSlider = new Swiper(".main-slider__swiper", {
        loop: true,
        edgeSwipeThreshold: 150,
        edgeSwipeThreshold: 150,
        effect: 'fade',
        speed: 1000,
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            prevEl: '.main-slider__arrow--prev',
            nextEl: '.main-slider__arrow--next'
        },
        pagination: {
            el: '.main-slider__pagination',
            clickable: true,
            bulletActiveClass: 'main-slider__bullet--active',
            currentClass: 'main-slider__bullet--current',
            bulletClass: 'main-slider__bullet',
        }
    });

}

export default { init }