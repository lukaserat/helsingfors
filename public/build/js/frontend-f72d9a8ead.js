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
    var $, $tpBanner, f1, fn;
    $ = jQuery;
    window.BOOKING_DATE = {
      startDate: moment(),
      endDate: moment()
    };
    if ($('[name="booking-response"]').length > 0) {
      fn = function() {
        var opts;
        opts = {
          scrollTop: $('[name="booking-response"]').offset().top
        };
        return $('html, body').animate(opts, 500);
      };
      setTimeout(fn, 200);
    }
    f1 = function() {
      var $calendar, f2;
      $calendar = $(this).parent().siblings('.calendar-object').children('.clndr');
      $('.calendar-object .clndr').removeClass('active');
      f2 = function() {
        return $calendar.addClass('active');
      };
      setTimeout(f2, 10);
      return $calendar.on('mouseleave', function() {
        return $calendar.removeClass('active');
      });
    };
    if ($('input.calendar').length > 0) {
      $('input.calendar').each(function() {
        return $(this).on('click', f1);
      });
      $('.calendar-object').each(function() {
        var cellClick, opts;
        cellClick = function(target) {
          var $element, $parent;
          $element = $(target.element);
          $parent = $(target.element).parents('.calendar-object');
          if (!$element.hasClass('past')) {
            if ($parent.hasClass('cal1')) {
              BOOKING_DATE.startDate = target.date;
              $('input[name="in_date"]').val(target.date.format('YYYY-MM-DD'));
            }
            if ($parent.hasClass('cal2')) {
              BOOKING_DATE.endDate = target.date;
              $('input[name="out_date"]').val(target.date.format('YYYY-MM-DD'));
            }
            return $parent.children('.clndr').removeClass('active');
          }
        };
        opts = {
          template: $('#template-calendar').html(),
          events: [],
          daysOfTheWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
          numberOfRows: 5,
          clickEvents: {
            click: cellClick
          }
        };
        return $(this).clndr(opts);
      });
    }
    if ($('.tp-banner').length > 0 && ($tpBanner = $('.tp-banner'))) {
      $tpBanner.each(function() {
        var opt;
        $(this).parent().addClass('active');
        opt = {
          delay: 9000,
          startwidth: 1170,
          startheight: 500,
          hideThumbs: 10,
          fullWidth: "on",
          fullScreenAlignForce: "on",
          forceFullWidth: "on",
          spinned: "spinner4",
          onHoverStop: "on",
          navigationType: 'none'
        };
        return $(this).revolution(opt);
      });
    }
    f1 = function() {
      var $y, x;
      $y = $(this).find('.caption-wrapper');
      x = $(this).outerHeight() - $y.outerHeight();
      return $y.css({
        top: x / 2
      });
    };
    if ($('.activities-wrapper .img-wrapper').length > 0) {
      $('.activities-wrapper .img-wrapper').each(f1);
    }
    if ($('#testimonials-carousel').length > 0) {
      $('#testimonials-carousel').carousel();
      f1 = function() {
        return $$(this).on('click', function() {
          return $('#testimonials-carousel').carousel($(this).data('slideTo'));
        });
      };
      return $('#testimonials-carousel').find('.carousel-indicators > li').each(f1);
    }
  });

}).call(this);

//# sourceMappingURL=main.js.map

//# sourceMappingURL=frontend.js.map
