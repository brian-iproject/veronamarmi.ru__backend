$(function(){
    $('.js-main-slider').slick({
        autoplay: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        dots: true,
        dotsClass: 'main-slider__dots',
        prevArrow: '<button type="button" class="main-slider__arrow main-slider__arrow--prev"><svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-slider-arrow"></use></svg></button>',
        nextArrow: '<button type="button" class="main-slider__arrow main-slider__arrow--next"><svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-slider-arrow"></use></svg></button>'
    });
});