// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    /*
     Allows you to add data-method="METHOD to links to automatically inject a form with the method on click
     Example: <a href="{{route('customers.destroy', $customer->id)}}" data-method="delete" name="delete_item">Delete</a>
     Injects a form with that's fired on click of the link with a DELETE request.
     Good because you don't have to dirty your HTML with delete forms everywhere.
     */
    $('[data-method]').append(function(){
        return "\n"+
        "<form action='"+$(this).attr('href')+"' method='POST' name='delete_item' style='display:none'>\n"+
        "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
        "   <input type='hidden' name='_token' value='"+$('meta[name="_token"]').attr('content')+"'>\n"+
        "</form>\n"
    })
        .removeAttr('href')
        .attr('style','cursor:pointer;')
        .attr('onclick','$(this).find("form").submit();');
    /*
     Bind all bootstrap tooltips
     */
    $("[data-toggle=\"tooltip\"]").tooltip();
    $("[data-toggle=\"popover\"]").popover();
    //This closes the popover when its clicked away from
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});

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
    jQuery('.activities-wrapper .img-wrapper').each(f1);
    if (jQuery('#testimonials-carousel').length > 0) {
      jQuery('#testimonials-carousel').carousel();
      f1 = function() {
        return $(this).on('click', function() {
          return jQuery('#testimonials-carousel').carousel($(this).data('slideTo'));
        });
      };
      return jQuery('#testimonials-carousel').find('.carousel-indicators > li').each(f1);
    }
  });

}).call(this);

//# sourceMappingURL=main.js.map

//# sourceMappingURL=frontend.js.map
