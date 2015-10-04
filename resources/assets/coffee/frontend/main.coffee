jQuery(document).ready ->

  fn1 = ()->
    $img = $(@).find('.img-wrapper')


  fn2 = ()->

  jQuery('.activities-wrapper .item-wrapper').hover fn1, fn2

  f1 = ()->
    $y = $(@).find('.caption-wrapper')
    x = $(@).outerHeight() - $y.outerHeight()
    $y.css { top: x/2 }

  jQuery('.activities-wrapper .img-wrapper').each f1


  # Testimonials carousel
  if jQuery('#testimonials-carousel').length > 0
    jQuery('#testimonials-carousel').carousel()
    f1 = ()->
      $(@).on 'click', ()->
        jQuery('#testimonials-carousel').carousel($(@).data('slideTo'))

    jQuery('#testimonials-carousel').find('.carousel-indicators > li').each f1

