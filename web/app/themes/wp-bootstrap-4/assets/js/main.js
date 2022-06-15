jQuery(document).ready(function(){

// Stick Menu
jQuery(window).scroll(function() {

    var scroll = jQuery(window).scrollTop();
    if (scroll >= 300) {
        jQuery(".header__menu").addClass("fixed");
        jQuery(".header__mobile").addClass("fixed");
    } else {
        jQuery(".header__menu").removeClass("fixed");
        jQuery(".header__mobile").removeClass("fixed");
    }

});

// Back To Top
var offset = 300,
offset_opacity = 1200,
scroll_top_duration = 700,
jQueryback_to_top = jQuery('.cd-top');
jQuery(window).scroll(function(){
( jQuery(this).scrollTop() > offset ) ? jQueryback_to_top.addClass('cd-is-visible') : jQueryback_to_top.removeClass('cd-is-visible cd-fade-out');
if( jQuery(this).scrollTop() > offset_opacity ) {
   jQueryback_to_top.addClass('cd-fade-out');
  }
  });
  //smooth scroll to top
  jQueryback_to_top.on('click', function(event){
    event.preventDefault();
    jQuery('body,html').animate({
    scrollTop: 0 ,
    }, scroll_top_duration
  );
});

// Test OWL
jQuery("#owl-spnb").owlCarousel({
	 loop:true,
   autoplay:true,
   autoplayTimeout:4000,
   autoplayHoverPause:true,
   responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true
        }
    },
 navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
});


var swiper1 = new Swiper('.swiper1', {
  slidesPerView: 4,
  spaceBetween: 10,
  autoplay: {
    delay: 5000,
  },
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next_1',
    prevEl: '.swiper-button-prev_1',
  },
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 10,
    }
  }
});



var swiper2 = new Swiper('.swiper2', {
 pagination: {
  el: '.swiper-pagination',
  clickable: true,
},
paginationClickable: true,
slidesPerView: 3,
spaceBetween: 30,
autoplay: {
  delay: 5000,
},
loop: true,
navigation: {
  nextEl: '.swiper-button-next_2',
  prevEl: '.swiper-button-prev_2',
},
breakpoints: {
  1024: {
    slidesPerView: 3,
    spaceBetween: 40,
  },
  768: {
    slidesPerView: 2,
    spaceBetween: 30,
  },
  640: {
    slidesPerView: 1,
    spaceBetween: 20,
  },
  320: {
    slidesPerView: 1,
    spaceBetween: 10,
  }
}
});


jQuery("#scroller").simplyScroll({ orientation: 'vertical', customClass: 'vert', autoMode: 'loop' });



var swiper3 = new Swiper('.swiper3', {
  pagination: '.swiper-pagination3',
  paginationClickable: true,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  slidesPerView: 8,
  breakpoints: {
    1024: {
      slidesPerView: 8,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 6,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
    320: {
      slidesPerView: 4,
      spaceBetween: 10,
    }
  }
});

var swiper4 = new Swiper('.swiper4', {
  slidesPerView: 3,
  spaceBetween: 20,
  autoplay: {
    delay: 5000,
  },
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next_4',
    prevEl: '.swiper-button-prev_4',
  },
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
});

  // Gallery sản phẩm 
  jQuery('.gallery-sp').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.gallery-sp-nav'
  });

  jQuery('.gallery-sp-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.gallery-sp',
    dots: true,
    arrows: true,
    centerMode: true,
    focusOnSelect: true
  });

});