jQuery(document).ready ->

  $ = jQuery

  window.APP =
    startDate: moment()
    endDate: moment()
    timeoutCal: 0

  # Booking response
  if $('[name="booking-response"]').length > 0
    fn = ()->
      opts =
        scrollTop: $('[name="booking-response"]').offset().top
      $('html, body').animate(opts, 500)
    setTimeout fn, 200


  # Booking Calendar Input
  f1 = ()->
    $calendar = $(@).parent().siblings('.calendar-object').children('.clndr')
    $('.calendar-object .clndr').removeClass('active')

    f2 = ()-> $calendar.addClass('active')
    setTimeout f2, 10

    f3 = ()-> $calendar.removeClass('active')

    $calendar.on 'mousemove', ()-> clearTimeout(APP.timeoutCal)

    $calendar.on 'mouseleave', ()->
      clearTimeout(APP.timeoutCal)
      APP.timeoutCal = setTimeout f3, 500

  if $('input.calendar').length > 0
    $('input.calendar').each ()-> $(@).on('click', f1)

    $('.calendar-object').each ()->

      cellClick = (target)->
        $element = $(target.element)
        $parent = $(target.element).parents('.calendar-object')
        if not $element.hasClass 'past'
          if $parent.hasClass('cal1')
            APP.startDate = target.date
            $('input[name="in_date"]').val(target.date.format('YYYY-MM-DD'))
          if $parent.hasClass('cal2')
            APP.endDate = target.date
            $('input[name="out_date"]').val(target.date.format('YYYY-MM-DD'))
          $parent.children('.clndr').removeClass('active')

      opts =
        template: $('#template-calendar').html()
        events: []
        daysOfTheWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
        numberOfRows: 5
        clickEvents:
          click: cellClick
      $(@).clndr opts

  # Page Slider
  if $('.tp-banner').length > 0 and $tpBanner = $('.tp-banner')
    $tpBanner.each ()->
      $(@).parent().addClass('active')
      opt =
        delay:9000,
        startwidth:1170,
        startheight:500,
        hideThumbs:10,
        fullWidth:"on",
        fullScreenAlignForce:"on",
        forceFullWidth:"on",
        spinned:"spinner4",
        onHoverStop:"on",
        navigationType: 'none'
      $(@).revolution opt

  # Activities
  f1 = ()->
    $y = $(@).find('.caption-wrapper')
    x = $(@).outerHeight() - $y.outerHeight()
    $y.css { top: x/2 }

  if $('.activities-wrapper .img-wrapper').length > 0
    $('.activities-wrapper .img-wrapper').each f1


  # Testimonials carousel
  if $('#testimonials-carousel').length > 0
    $('#testimonials-carousel').carousel()
    f1 = ()->
     $$(@).on 'click', ()->
        $('#testimonials-carousel').carousel($(@).data('slideTo'))

    $('#testimonials-carousel').find('.carousel-indicators > li').each f1

