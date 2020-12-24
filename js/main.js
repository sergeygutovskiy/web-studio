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



const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

class CircularMotion {
  CENTER_X
  CENTER_Y
  FROM_CENTER
  
  constructor ({x, y, radius, color, fromCenterMin = 10, fromCenterMax = 50}) {
    // as the circular motion's center position
    this.CENTER_X = x
    this.CENTER_Y = y
    this.FROM_CENTER = generateIntFromRange(fromCenterMin, fromCenterMax)

    this.lastMouseX = x
    this.lastMouseY = y

    // init variables
    this.x = x
    this.y = y
    this.radius = radius
    this.color = color
    this.radians = Math.random() * Math.PI * 2
    this.velocity = 0.1
  }
  
  update () {
    // the old position
    const oldPosition = {
      oldX: this.x,
      oldY: this.y
    }

    // mousemove effect
    if (mousePosition.x) {
      this.lastMouseX += (mousePosition.x - this.lastMouseX) * 0.1
      this.lastMouseY += (mousePosition.y - this.lastMouseY) * 0.1      
    }
    
    // calculate new position
    this.radians += this.velocity
    this.x = this.lastMouseX + Math.cos(this.radians) * this.FROM_CENTER
    this.y = this.lastMouseY + Math.sin(this.radians) * this.FROM_CENTER

    // draw the old position
    this.draw(oldPosition)
    
  }

  draw ({ oldX, oldY }) {
    c.beginPath()
    c.strokeStyle = this.color
    c.lineWidth = this.radius
    c.moveTo(oldX, oldY)
    c.lineTo(this.x , this.y)
    c.stroke()
    c.closePath()
  }

}

function getRandomColorFromList (colorList) {
  return colorList[Math.floor(Math.random() * colorList.length)]
}

function generateIntFromRange (min, max) {
  return Math.floor(min + Math.random() * (max - min))
}

function generateBallList (sum) {
  return Array.from({length: sum}).map(item => {
    return new CircularMotion({
      x: canvas.width / 2,
      y: canvas.height / 2,
      color: getRandomColorFromList(['#00bdff', '#4d39ce', '#088eff', '#4F80E1']),
      radius: 2
    })
  })
}

// mousePosition = {}
// window.addEventListener('mousemove', function (evt) {
//   mousePosition.x = evt.x
//   mousePosition.y = evt.y
// })

// let setAnimation = (function (sum) {
//   const list = generateBallList(sum)
//   return function () {
//     requestAnimationFrame(setAnimation)
//     c.fillStyle = 'rgba(255, 255, 255, 0.1)'
//     c.fillRect(0, 0, window.innerWidth, window.innerHeight)

//     list.forEach(v => {v.update()})
//   }
// })(30)

// setAnimation()


VANTA.HALO({
  el: "#your-element-selector",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  backgroundColor: 0x212121,
  size: 0.10
})