$(document).ready(function() {


  $('.flexslider').flexslider({
    animation: "slide"
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    sync: "#carousel"

  });
  
  $("#nav-icon").click(function(){
    $("#nav-mobile").toggle();
  });

});
