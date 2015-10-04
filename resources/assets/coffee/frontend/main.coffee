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

