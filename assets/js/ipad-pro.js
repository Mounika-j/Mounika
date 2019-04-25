$(document).ready(function() {

  $('video').hide();

  $('video').click(function(){
    this.play();
  });

  $('.video-wrap').click(function(){
    $('.video-wrap').hide();
    $('video').show();
    $('video').click();
  });

});
