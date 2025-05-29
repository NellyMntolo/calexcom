
function main() {

(function () {
   'use strict';

   /*[ Load page ]
    ===========================================================*/
   $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div data-loader="ball-scale"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });

   /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });

   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    $('#our_contact_btn').click(function() {
      $('html, body').animate({
        scrollTop: $("div#contact").offset().top - 40
      }, 900)

      });

	
    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            //$('.navbar-default').removeClass('on');
            $('.navbar-default').addClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });

	// Hide nav on click
  $(".navbar-nav li a.page-scroll").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });

  //  search button mobile hide menu
  // $(".navbar-nav li button.page-scroll").click(function (event) {
  //   // check if window is small enough so dropdown is created
  //   var toggle = $(".navbar-toggle").is(":visible");
  //   if (toggle) {
  //     $(".navbar-collapse").collapse('hide');
  //   }
  // });
	
  	// Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	

    // Nivo Lightbox 
    $('.portfolio-item a').nivoLightbox({
            effect: 'slideDown',  
            keyboardNav: true,                            
        });



    //  Home Swiper
    // var swiper = new Swiper('#home-slider .swiper-container', {
    //     nextButton: '.swiper-button-next',
    //     prevButton: '.swiper-button-prev',
    //     slidesPerView: 1,
    //     paginationClickable: true,
    //     speed: 1000,
    //     autoplay:5000,
    //     loop: true,
    //     pagination: {
    //     el: '.swiper-pagination',
    //     dynamicBullets: true,
    //     },
    //     coverflowEffect: {
    //       rotate: 30,
    //       slideShadows: false,
    //     },

    // });

/* swiper custom animation */
var interleaveOffset = -.5;

var interleaveEffect = {
  
  onProgress: function(swiper, progress){
    for (var i = 0; i < swiper.slides.length; i++){
      var slide = swiper.slides[i];
      var translate, innerTranslate;
      progress = slide.progress;
      
      if (progress > 0) {
        translate = progress * swiper.width;
        innerTranslate = translate * interleaveOffset;        
      }
      else {        
        innerTranslate = Math.abs( progress * swiper.width ) * interleaveOffset;
        translate = 0;
      }

      $(slide).css({
        transform: 'translate3d(' + translate + 'px,0,0)'
      });

      $(slide).find('.slide-inner').css({
        transform: 'translate3d(' + innerTranslate + 'px,0,0)'
      });
    }
  },

  onTouchStart: function(swiper){
    for (var i = 0; i < swiper.slides.length; i++){
      $(swiper.slides[i]).css({ transition: '' });
    }
  },

  onSetTransition: function(swiper, speed) {
    for (var i = 0; i < swiper.slides.length; i++){
      $(swiper.slides[i])
        .find('.slide-inner')
        .andSelf()
        .css({ transition: speed + 'ms' });
    }
  }
};

var swiperOptions = {
  loop: true,
  speed: 1000,
  grabCursor: true,
  watchSlidesProgress: true,
  //mousewheelControl: true,

  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  slidesPerView: 1,
  paginationClickable: true,
  speed: 1000,
  // autoplay:5000,
  loop: true,
  pagination: {
  el: '.swiper-pagination',
  dynamicBullets: true,
  },
};

swiperOptions = $.extend(swiperOptions, interleaveEffect);

var swiper = new Swiper('#home-slider .swiper-container', swiperOptions);


/* swiper custom animation */


    // Typed 
    $(function(){
        $(".mytyped").typed({
            strings: ["The road to success and the road to failure are almost exactly the same."],
            typeSpeed: 50,
            backSpeed: 50,
            loop: false
        });
    });

    if ($(window).width() < 426) {
      //$('.dropdown').addClass('open');
      //$('dropdown-toggle').attr('aria-expanded', 'true');
    };



    
    /* Every time the window is scrolled ... */
    // $(window).scroll( function(){
    //     /* Check the location of each desired element */
    //     $('.index_products').each( function(i){
    //         var bottom_of_object = $(this).position().top + $(this).outerHeight();
    //         var bottom_of_window = $(window).scrollTop() + $(window).height();            
    //         /* If the object is completely visible in the window, fade it it */
    //         if( bottom_of_window > bottom_of_object ){
    //             $(this).animate({'opacity':'1'},1500);                    
    //         }            
    //     });    
    // });



// MODAL
    //$(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});

/*    
 particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);

  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
*/



}());


}
main();