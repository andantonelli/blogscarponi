import {
  setupSlideshow,
  toggleSidebar
} from './functions'
import './polyfill'

window.onload = () => {
  setupSlideshow('#full-width-slideshow .slides')
  toggleSidebar()
}
