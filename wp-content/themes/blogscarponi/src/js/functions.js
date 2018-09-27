import $ from 'jquery'
import slick from 'slick-carousel'

export const setupSlideshow = (el, type = 'fullwidth') => {
  const $el = $(el);
  const opts = {
    fullwidth: {
      autoplay: true,
      dots: true,
      arrows: true,
      infinite: true,
      fade: false
    }
  }

  $el.slick(opts[type])
}

export const toggleSidebar = () => {
  const openIcon = $('.header__icon')
  const closeIcon = $('.sidebar__icon')
  const sidebar = $('.sidebar')

  openIcon.on('click', function () {
    sidebar.addClass('open')
  })
  
  closeIcon.on('click', function () {
    sidebar.removeClass('open')
  })

  $(window).on('resize', function() {
    sidebar.removeClass('open')
  })
}
