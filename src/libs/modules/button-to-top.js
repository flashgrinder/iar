const buttonToTop = document.querySelector('.button-to-top');

function showButtonToTop() {
    
    let windowScroll = window.pageYOffset; // Another Browsers

    if (windowScroll > 400) {
        buttonToTop.classList.add('is-show');
    } else {
        buttonToTop.classList.remove('is-show');
    }
};

function scrollToTop(e) {
    e.preventDefault();
    window.scroll({ top: 0, left: 0, behavior: 'smooth' });
};

function init() {
    window.addEventListener('scroll', showButtonToTop);
    buttonToTop.addEventListener('click', scrollToTop);
}

export default {init}