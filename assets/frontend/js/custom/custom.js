/* Please ❤ this if you like it! */

(function($) {
  "use strict";

  $("body").on("mouseenter mouseleave", ".nav-item", function(e) {
    if ($(window).width() > 767) {
      var _d = $(e.target).closest(".nav-item");
      _d.addClass("show");
      setTimeout(function() {
        _d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
      }, 1);
    }
  });
})(jQuery);
