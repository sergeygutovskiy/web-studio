$(document).ready(function(){
    $('.about__slider').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        infinite: true,
        prevArrow:'.about__arrow-left',
        nextArrow:'.about__arrow-right',
    });

    // $('[data-news-pos]').on('click', function(){
    //     $('.about__slider').slick('slickGoTo', $(this).attr('data-news-pos'));
    // });


  });