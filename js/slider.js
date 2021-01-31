window.addEventListener('DOMContentLoaded', () => {
// СЛАЙДЕРЫ
$('.about__slider').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    nextArrow:'.about__arrow-right',
    prevArrow:'.about__arrow-left',
});

$('.main__slider').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    infinite: true,
    centerMode:true,
    variableWidth: true,
    autoplay: true,
    arrows:false,
    autoplaySpeed: 1000,
});

});