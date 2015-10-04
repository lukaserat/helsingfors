(function() {
  jQuery(document).ready(function() {
    var f1, fn1, fn2;
    fn1 = function() {
      var $img;
      return $img = $(this).find('.img-wrapper');
    };
    fn2 = function() {};
    jQuery('.activities-wrapper .item-wrapper').hover(fn1, fn2);
    f1 = function() {
      var $y, x;
      $y = $(this).find('.caption-wrapper');
      x = $(this).outerHeight() - $y.outerHeight();
      return $y.css({
        top: x / 2
      });
    };
    return jQuery('.activities-wrapper .img-wrapper').each(f1);
  });

}).call(this);

//# sourceMappingURL=main.js.map
