$(document).ready(function() {
    var lastScrollTop = 0;
    $(window).scroll(function(event) {
      var st = $(this).scrollTop();
      if (st > lastScrollTop) {
        // Przewijanie w dół
        $(".sticky-show").removeClass("sticky-top");
        $(".sticky-hide").addClass("sticky-top");
      } else {
        // Przewijanie w górę
        $(".sticky-show").addClass("sticky-top");
        $(".sticky-hide").removeClass("sticky-top");
      }
      lastScrollTop = st;
    });
  });
  