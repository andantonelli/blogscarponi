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
