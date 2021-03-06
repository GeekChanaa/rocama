(function($) {
  "use strict"; // Start of use strict


  // Changing the style of fixed navbar when scrolling
  if($(document).scrollTop() > $(".fixed-top").height()+19){
    $("#logo").prop('src','img/logo.png');
  }
  $(window).resize(function(e){
    if($(this).width()<975){
      $("#logo").prop('src','img/logo.png');
    }
    else{
      $("#logo").prop('src','img/logo2.png');
    }
  });
    $(document).scroll(function () {
    var nav = $(".fixed-top");
    nav.toggleClass('scrolled',$(document).scrollTop() > nav.height());
    if($(document).scrollTop() > nav.height()+45){
      $("#logo").prop('src','img/logo.png');
    }
    else{
      $("#logo").prop('src','img/logo2.png');
    }
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  $(document).ready(function() {
       $('.carousel').carousel({
           interval: 3000
       })
  });




  // Team members
  $('.team-member .icon span').hide();

  $('.team-member li a').hover(
  function() {
    var data=$(this).parent().data('social');
    $('span[data-social='+data+']').slideDown(300);
  }, function() {
    var data=$(this).parent().data('social');
    $('span[data-social='+data+']').slideUp(300);
  }
);


})(jQuery); // End of use strict


$('.share-alt').on('click', function(e){
  $(".branch").removeClass("no-animation");
  $('.branch').toggleClass("open");
});

$('.social').on('click', function(e){
  $(".containerr").removeClass("no-animation");
  $(".containerr").toggleClass("open");
});

$('.share').on('click', function(e){
  $(".float-circle").removeClass("no-animation");
  $(".float-circle").toggleClass("open");
});
