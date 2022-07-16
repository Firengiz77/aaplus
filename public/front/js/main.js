$(document).ready(function () {
    $(".open-src").click(function () {
      $(".search-input").addClass("open")
    })
    $(".close-src").click(function () {
      $(".search-input").removeClass("open")
    })
    $(".about").mouseleave(function(){
      $(".about").removeClass("active") 
      $("header").css("background","#00263E")
      $(".logo-2").css("display","none")
      $(".logo-1").css("display","block")
    })
    $(".nav .nav-item a").mouseenter(function(){
      $(".products").removeClass("active")
      $(".about").removeClass("active")
      $("header").css("background","#00263E")
      $(".logo-2").css("display","none")
      $(".logo-1").css("display","block")
    })
    $(".nav .nav-item:first-child a").mouseenter(function(){
      $(".products").removeClass("active")
      $(".about").addClass("active")
      $("header").css("background","#758592")
      $(".logo-2").css("display","block")
      $(".logo-1").css("display","none")
    })
    $(".products").mouseleave(function(){
      $(".products").removeClass("active")
      $(".nav-ser").removeClass("active")
      $(".nav-wire").removeClass("active")
      $(".nav-purpose").removeClass("active")
      $(".nav-program").removeClass("active")
      $(".products img").css("display","block")
      $("header").css("background","#00263E")
      $(".logo-2").css("display","none")
      $(".logo-1").css("display","block")
    })
    $(".products img").mouseenter(function(){ 
      $("header").css("background","#758592")
    })
    $(".nav .nav-item:nth-child(2) a").mouseenter(function(){
      $(".about").removeClass("active")
      $(".products").addClass("active")
      $("header").css("background","#758592")
      $(".logo-2").css("display","block")
      $(".logo-1").css("display","none")
    })
    $(".services").click(function(){
      $(".products img").css("display","none")
      $(".nav-ser").addClass("active")
      $(".nav-wire").removeClass("active")
      $(".nav-purpose").removeClass("active")
      $(".nav-program").removeClass("active")
    })
    $(".wireless").click(function(){
      $(".products img").css("display","none")
      $(".nav-ser").removeClass("active")
      $(".nav-wire").addClass("active")
      $(".nav-purpose").removeClass("active")
      $(".nav-program").removeClass("active")
    })
    $(".purpose").click(function(){
      $(".products img").css("display","none")
      $(".nav-ser").removeClass("active")
      $(".nav-wire").removeClass("active")
      $(".nav-purpose").addClass("active")
      $(".nav-program").removeClass("active")
    })
    $(".program").click(function(){
      $(".products img").css("display","none")
      $(".nav-ser").removeClass("active")
      $(".nav-wire").removeClass("active")
      $(".nav-purpose").removeClass("active")
      $(".nav-program").addClass("active")
    })
    $(".contact-main").addClass("active")
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      console.log(scroll) 
      if (scroll >= 500) {
          $("#about .head-text-div").addClass("active");
      }
      else{
        $("#about .head-text-div").removeClass("active");
      } 
      if (scroll >= 1000) {
          $("#products .head-text-div").addClass("active");
      }
      else{
        $("#products .head-text-div").removeClass("active");
      }
      if (scroll >= 2000) {
        $(".infographic .head-text-div").addClass("active");
      }
      else{
        $(".infographic .head-text-div").removeClass("active");
      }
      if (scroll >= 2500) {
        $("#news .head-text-div").addClass("active");
        $(".news-images").addClass("active")
      }
      else{
        $("#news .head-text-div").removeClass("active");
        $(".news-images").removeClass("active")
      }
      if (scroll >= 3000) {
        $("#projects .head-text-div").addClass("active");
      }
      else{
        $("#projects .head-text-div").removeClass("active");
      }
      if (scroll >= 3500) {
        $("#partners .head-text-div").addClass("active");
      }
      else{
        $("#partners .head-text-div").removeClass("active");
      }
      if (scroll >= 4300) {
        $("#address .head-text-div").addClass("active");
      }
      else{
        $("#address .head-text-div").removeClass("active");
      }
    })
    $('.video').parent().click(function () {
      if($(this).children(".video").get(0).paused){        
        $(this).children(".video").get(0).play();   
        $(this).children(".playpause").fadeOut();
      }else{       
        $(this).children(".video").get(0).pause();
        $(this).children(".playpause").fadeIn();
      }
    });
    $(window).scroll(startCounter);
    AOS.init();
    function startCounter() {
      let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
      let divPos = document.querySelector('#counter-container').offsetTop;
    
      if (scrollY > divPos) {
        $(window).off("scroll", startCounter);
    
        $('.count').each(function() {
          var $this = $(this);
          jQuery({
            Counter: 0
          }).animate({
            Counter: $this.text().replace(/,/g, '')
          }, {
            duration: 1000,
            easing: 'swing',
            step: function() {
              $this.text(commaSeparateNumber(Math.floor(this.Counter)));
            },
            complete: function() {
              $this.text(commaSeparateNumber(this.Counter));
              //alert('finished');
            }
          });
        });
        $('[data-fancybox]').fancybox({
          loop: true,
        });
        function commaSeparateNumber(num) {
          return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
      }
    }
});