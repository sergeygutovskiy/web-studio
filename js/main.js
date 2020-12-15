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

    $('.nav__link').on('click', function(){
      console.log(1);
      $('.nav__link').removeClass('nav__link--active');
      $(this).addClass('nav__link--active');
    });

    
    $('.about__slider').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        nextArrow:'.about__arrow-left',
        prevArrow:'.about__arrow-right'
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

 

    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, 
        {
          duration: 3000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });


      
      });


  new WOW().init();