const header = document.querySelector('.header');
let lastScrollTop = 250;

function hideHeader() {
    
    let windowScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (windowScroll > lastScrollTop) {
        header.classList.add('is-out');
    } else {
        header.classList.remove('is-out');
    }

    lastScrollTop = windowScroll;
};

function init() {
    window.addEventListener('scroll', hideHeader);
}

export default {init}