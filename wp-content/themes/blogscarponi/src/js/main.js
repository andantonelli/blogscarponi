import { setupSlideshow } from './functions'
import './polyfill'

window.onload = () => {
  setupSlideshow('#full-width-slideshow .slides')
}
