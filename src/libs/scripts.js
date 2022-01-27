import burgerMenu from '../libs/modules/burger-menu.js';
import buttonToTop from '../libs/modules/button-to-top.js';
import showHideMenuScroll from '../libs/modules/show-hide-menu-scroll.js';
import mainSlider from '../libs/modules/main-slider.js';

document.addEventListener('DOMContentLoaded', function(e) {

    burgerMenu.init();
    showHideMenuScroll.init();
    buttonToTop.init();
    mainSlider.init();

});