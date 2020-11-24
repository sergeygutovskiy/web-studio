$(document).ready(function(){
    $(".nav__menu").click(function() {			
    	$(".nav__link").each(function(index) {
    		let current = $(this);
        
    		setTimeout(function() {
    			current.toggleClass("nav__link--active");
    		}, 100 + index * 100);		
    	});
    
    	$("nav").toggleClass("nav--active");
    	$(".nav__menu").toggleClass("nav__menu--active");
    });

    
    $('.about__slider').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        infinite: true,
        prevArrow:'.about__arrow-left',
        nextArrow:'.about__arrow-right',
    });

    $('.main__slider').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        infinite: true,
        centerMode:true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('[data-news-pos]').on('click', function(){
        $('.about__slider').slick('slickGoTo', $(this).attr('data-news-pos'));
    });


  });