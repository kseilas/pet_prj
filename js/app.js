$(function() {

  var header = $("#header"),introHeight = $("#intro").innerHeight(),scrollOffset = $(window).scrollTop();

      /* Fixed header */

  checkScroll(scrollOffset);

  $(window).on("scroll", function() {

    scrollOffset = $(this).scrollTop();

    checkScroll(scrollOffset);

  });

  function checkScroll(scrollOffset) {
    
    if (scrollOffset > introHeight ) {
      header.addClass("fixed");
    }
    else {
      header.removeClass("fixed");
    }
  }

      /* Smooth scroll */

  $("[data-scroll]").on("click", function(event) {
    event.preventDefault();

    var $this = $(this),
    sectionID = $this.data('scroll'),
    sectionOffset = $(sectionID).offset().top;

    $("#nav a").removeClass("active");
    $("#nav").toggleClass("active");
    $("#nav").removeClass("active");
    $("#nav-toggle").removeClass("active");

    $this.addClass("active");

    $("html, body").animate({
      scrollTop: sectionOffset
    }, 600);
  });

      /* Nav Toggle */

  $("#nav-toggle").on("click", function(event) {
    event.preventDefault();

    $(this).toggleClass("active");
    $("#nav").toggleClass("active");


  });
});