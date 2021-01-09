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
     
    $(window).scroll(function(){
      scrollTracking();
    });
      
    $(document).ready(function(){ 
      scrollTracking();
    });

});


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








  // АНИМАЦИЯ
  const animItems = document.querySelectorAll('._anim-items');

  if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(){
      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index];
        const animItemHeight = animItem.offsetHeight;
        const animItemOffset = offset(animItem).top;
        const animStart = 4;
  
        let animItemPoint = window.innerHeight - animItemHeight / animStart;
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }
  
        if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
          animItem.classList.add('_active');
        } else {
          if(!animItem.classList.contains('_anim-no-hide')){
              animItem.classList.remove('_active');
          }
        }
      }
    }
  
    function offset(el) {
      const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset  || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }
    setTimeout(() => {
      animOnScroll();
    }, 300);
  } 