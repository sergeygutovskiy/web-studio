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
      $("body").toggleClass("body__disabled");
    });

    
    
  

    $('.nav__link').on('click', function(){
      console.log(1);
      $('.nav__link').removeClass('nav__link--active');
      $(this).addClass('nav__link--active');
    });

    
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



    var block_show = false;
 
    function scrollTracking(){
      if (block_show) {
        return false;
      }
     
      var wt = $(window).scrollTop();
      var wh = $(window).height();
      var et = $('.count').offset().top;
      var eh = $('.count').outerHeight();
      var dh = $(document).height();   
     
      if (wt + wh >= et || wh + wt == dh || eh + et < wh){
        block_show = true;
        
        // Код анимации
        $('.count').each(function() {     
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, 
          {
            duration: 5000,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    }
     
    $(window).scroll(function(){
      scrollTracking();
    });
      
    $(document).ready(function(){ 
      scrollTracking();
    });

      new WOW().init();
      

      
});

