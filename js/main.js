


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
      


// Анимация текста 

class TextScramble {
  constructor(el) {
    this.el = el
    this.chars = '!<>-_\\/[]{}—=+*^?#________'
    this.update = this.update.bind(this)
  }
  setText(newText) {
    const oldText = this.el.innerText
    const length = Math.max(oldText.length, newText.length)
    const promise = new Promise((resolve) => this.resolve = resolve)
    this.queue = []
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || ''
      const to = newText[i] || ''
      const start = Math.floor(Math.random() * 40)
      const end = start + Math.floor(Math.random() * 40)
      this.queue.push({ from, to, start, end })
    }
    cancelAnimationFrame(this.frameRequest)
    this.frame = 0
    this.update()
    return promise
  }
  update() {
    let output = ''
    let complete = 0
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i]
      if (this.frame >= end) {
        complete++
        output += to
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar()
          this.queue[i].char = char
        }
        output += `<span class="dud">${char}</span>`
      } else {
        output += from
      }
    }
    this.el.innerHTML = output
    if (complete === this.queue.length) {
      this.resolve()
    } else {
      this.frameRequest = requestAnimationFrame(this.update)
      this.frame++
    }
  }
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)]
  }
}
const phrases = [
  'сайты',
  'приложения',
  'дизайн'
]

const el = document.querySelector('.text')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
  fx.setText(phrases[counter]).then(() => {
    setTimeout(next, 800)
  })
  counter = (counter + 1) % phrases.length
}

next()
      
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
  autoplaySpeed: 10000000,
});