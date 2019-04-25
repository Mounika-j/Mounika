// alive on Dec 24 at 12am PST and is turned off on Jan 3 at 12pm PST
// var start = Date.parse("December 24 2016 00:00 PST");
// var end = Date.parse("January 3 2017 12:00 PST");
// var now = new Date().getTime();

// $("#top-banner").hide();
// if(now > start && now < end){
//   $("#top-banner").show();
// }

// $("#top-banner").click(function() {
//   window.location.href = "https://graphic.com/landing.html";
// });


$(document).ready(function() {

  //Setup variables used for selectors and storing color values.
  var landingHero = $('#homepage-hero > .background');

  var macLink = $('#mac');
  var iphoneLink = $('#iphone');
  var ipadLink = $('#ipad');

  var macBG, iphoneBG, ipadBG;
  
  var macHover, iphoneHover, ipadHover, ipadProHover;

  var macHit = $('.hit.-mac');
  var ipadHit = $('.hit.-ipad');
  var iphoneHit = $('.hit.-iphone');

  var macLearn = $('.hit.-mac .learn-more');
  var ipadLearn = $('.hit.-ipad .learn-more');
  var iphoneLearn = $('.hit.-iphone .learn-more');

  //Function for calculating new hex value based on percentage increase / decrease. Used for hover states.
  function LightenDarkenColor(col, amt) {
  
    var usePound = false;

    if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
    }

    var num = parseInt(col,16);

    var r = (num >> 16) + amt;

    if (r > 255) r = 255;
    else if  (r < 0) r = 0;

    var b = ((num >> 8) & 0x00FF) + amt;

    if (b > 255) b = 255;
    else if  (b < 0) b = 0;

    var g = (num & 0x0000FF) + amt;

    if (g > 255) g = 255;
    else if (g < 0) g = 0;

    return (usePound?"#":"") + (g | (b << 8) | (r << 16)).toString(16);
  
  }

  //Updates background colors and calculates hover state hex values.
  function updateHexValues(){
    macLink.css('background-color', macBG);
    ipadLink.css('background-color', ipadBG);
    iphoneLink.css('background-color', iphoneBG);

    macHover = LightenDarkenColor(macBG, -20);
    ipadHover = LightenDarkenColor(ipadBG, -20);
    ipadProHover = LightenDarkenColor(ipadProBG, -20);
    iphoneHover = LightenDarkenColor(iphoneBG, -20);
  }


  //Generates random number and based off that choose Hero image / color scheme for landing page.
  // landingHero.css('background-image', 'url(assets/images/home-banner.png)');
  // macBG = "#7b6ba6";
  // ipadBG = "#b16464";
  // ipadProBG = "#e49797";
  // iphoneBG = "#b54131";
  // updateHexValues();
  // var randomNum = Math.floor( Math.random() * 3);

  // switch(randomNum) {
    // case 0:
    //     landingHero.css('background-image', 'url(assets/images/temple_hero.jpg)');

    //     macBG = "#7b6ba6";
    //     ipadBG = "#b16464";
    //     ipadProBG = "#e49797";
    //     iphoneBG = "#b54131";

    //     updateHexValues();
    //     break;
    // case 1:
    //     landingHero.css('background-image', 'url(assets/images/biker_hero.jpg)');

    //     macBG = "#9baa5d";
    //     ipadBG = "#aa935d";
    //     ipadProBG = "#ddc691";
    //     iphoneBG = "#aa785d";

    //     updateHexValues();
    //     break;
    // case 2:
    //     landingHero.css('background-image', 'url(assets/images/car_hero.jpg)');

    //     macBG = "#f9ab23";
    //     ipadBG = "#f37f00";
    //     ipadProBG = "#f6b333";
    //     iphoneBG = "#f55509";

    //     updateHexValues();
    //     break;
  //   default:
  //       landingHero.css('background-image', 'url(assets/images/car_hero.jpg)');

  //       macBG = "#f9ab23";
  //       ipadBG = "#f37f00";
  //       ipadProBG = "#f6b333";
  //       iphoneBG = "#f55509";

  //       updateHexValues();
  // }
  

  //Changes hover state for lower navigation area on homepage
  macLink.hover(function(){
    $(this).css('background-color', macHover);
  }, function(){
    $(this).css('background-color', macBG);
  });

  ipadLink.hover(function(){
    $(this).css('background-color', ipadHover);
  }, function(){
    $(this).css('background-color', ipadBG);
  });

  $('.learn-more.wrap-div').hover(function(){
    $('.ipad-pro-link').css('background-color', ipadProHover);
  }, function(){
    $('.ipad-pro-link').css('background-color', ipadProBG);
  });

  $('.learn-more.wrap-div').hover(function(){
    $('.ipad-link').css('background-color', ipadHover);
  }, function(){
    $('.ipad-link').css('background-color', ipadBG);
  });

  iphoneLink.hover(function(){
    $(this).css('background-color', iphoneHover);
  }, function(){
    $(this).css('background-color', iphoneBG);
  });

  macHit.hover(function(){
    macLearn.css('opacity', '1');
    macLearn.css('background-color', macBG);
    macLink.css('background-color', macHover);
  }, function(){
    macLearn.css('opacity', '0');
    macLink.css('background-color', macBG);
  });

  ipadHit.hover(function(){
    ipadLearn.css('opacity', '1');
    ipadLearn.css('background-color', ipadBG);
    ipadLink.css('background-color', ipadHover);
  }, function(){
    ipadLearn.css('opacity', '0');
    ipadLink.css('background-color', ipadBG);
  });

   iphoneHit.hover(function(){
    iphoneLearn.css('opacity', '1');
    iphoneLearn.css('background-color', iphoneBG);
    iphoneLink.css('background-color', iphoneHover);
  }, function(){
    iphoneLearn.css('opacity', '0');
    iphoneLink.css('background-color', iphoneBG);
  });


  //Opens mobile navigation
  $("#nav-icon").click(function(){
    console.log('click');
    $("#nav-mobile").toggle();
  });


  //Checks for slider div and intializes flexslider plugin.
  if( $('.iphone-slider').length != 0 )
  {  
    $('.iphone-slider').flexslider({
      animation: "slide",
      slideshow: false,
    });
  }
});