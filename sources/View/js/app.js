const modal = $('.modal');
// const userMethods = $('.user-methods');
const loginBtn = $('#login-btn');
const regBtn = $('#reg-btn');
const modalClose = $('.modal-close');
const userMethods = $('.user-methods');
const loginTab = $('#login-tab');
const regTab = $('#reg-tab');
const loginHeadBtn = $('.login-tab');
const regHeadBtn = $('.reg-tab');
const activeTab = 'tab-active';

function reset() {
    modal.css({
        display: 'none',
    });
    regTab.css({
        display: 'none',
    });
    loginTab.css({
        display: 'none',
    });
}
loginBtn.click(() => {
    modal.css({
        display: 'block',
    });
    loginHeadBtn.addClass(activeTab);
    regHeadBtn.removeClass(activeTab);
    loginTab.css({
        display: 'flex',
    });
    regTab.css({
        display: 'none',
    });
});

regBtn.click(() => {
    modal.css({
        display: 'block',
    });
    regHeadBtn.addClass(activeTab);
    loginHeadBtn.removeClass(activeTab);
    regTab.css({
        display: 'flex',
    });
    loginTab.css({
        display: 'none',
    });
});

loginHeadBtn.click(() => {
    loginHeadBtn.addClass(activeTab);
    regHeadBtn.removeClass(activeTab);
    loginTab.css({
        display: 'flex',
    });
    regTab.css({
        display: 'none',
    });
});
regHeadBtn.click(() => {
    regHeadBtn.addClass(activeTab);
    loginHeadBtn.removeClass(activeTab);
    regTab.css({
        display: 'flex',
    });
    loginTab.css({
        display: 'none',
    });
});

modalClose.click(() => {
    reset();
});
$('.modal-background').click(e => {
    reset();
});



var slideIndex = 0;
const slides = $('.adver-img');
if (slides.length > 0)
    showSlides();
function showSlides() {
    $.each(slides, (index) => {
        $(slides[index]).css({
            display: 'none',
        });
    });
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    $(slides[slideIndex - 1]).css({
        display: 'inline',
    });
    setTimeout(showSlides, 3000);
}
function pushSlides(n) {
    showSlide(slideIndex += n);
}
function currentSlide(n) {
    showSlide(slideIndex = n);
}
function showSlide(n) {
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    $.each(slides, index => {
        $(slides[index]).css({
            display: 'none',
        });
    });

    $(slides[slideIndex - 1]).css({
        display: 'inline',
    });
}