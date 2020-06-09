// Init jquery
$(document).ready(function(){

    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true
      });
    });

    $(window).scroll(function(){
      if ($(this).scrollTop() > 350) {
         $('.quoter').addClass('animate__slideOutLeft');
      } else {
         $('.quoter').removeClass('animate__slideInLeft');
      }
  });

  });