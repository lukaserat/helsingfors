(function() {
  jQuery(document).ready(function() {
    var $, $tpBanner, f1, fn;
    $ = jQuery;
    window.APP = {
      startDate: moment(),
      endDate: moment(),
      timeoutCal: 0
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
      var $calendar, f2, f3;
      $calendar = $(this).parent().siblings('.calendar-object').children('.clndr');
      $('.calendar-object .clndr').removeClass('active');
      f2 = function() {
        return $calendar.addClass('active');
      };
      setTimeout(f2, 10);
      f3 = function() {
        return $calendar.removeClass('active');
      };
      $calendar.on('mousemove', function() {
        return clearTimeout(APP.timeoutCal);
      });
      return $calendar.on('mouseleave', function() {
        clearTimeout(APP.timeoutCal);
        return APP.timeoutCal = setTimeout(f3, 500);
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
              APP.startDate = target.date;
              $('input[name="in_date"]').val(target.date.format('YYYY-MM-DD'));
            }
            if ($parent.hasClass('cal2')) {
              APP.endDate = target.date;
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
