$(document).ready(function () {
  var partners = new Swiper('.partners', {
    slidesPerView: 4,
    slidesPerColumn: 2,
    spaceBetween: 30,
    slidesPerColumnFill: 'column',
  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {  
    640: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },
  },
  });
  var homeSlider = new Swiper(".homeSlider", {
    effect: "fade",
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      
    }
  });
  var productSlider = new Swiper(".productSlider", {
    effect: "fade",
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      
    }
  });  var productSlider = new Swiper(".newsSlider", {
    effect: "fade",
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      
    }
  });
  $('.certificate-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ["<img src='./img/left-slide-arrow.svg'>", "<img src='./img/right-slide-arrow.svg'>"],
    center:true,
    loop:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
    }
  })
  $('.partners-slider').owlCarousel({
    loop:true,
    margin:50,
    nav:false,
    loop:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
           items:4
        },
    }
  })
  $('.number-select').niceSelect();
  
});