import $ from 'jquery'
import 'core-js/es/number'
import Swiper, {
  Navigation,
  A11y,
  Autoplay,
  Pagination
} from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, A11y, Autoplay, Pagination])

class SliderPosts extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
  }

  getInitialProps () {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) {}
    return data
  }

  resolveElements () {
    this.$slider = $('[data-slider]', this)
    this.$sliderItems = $('.swiper-slide', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)
    this.$pagination = $('[data-slider-pagination]', this)
  }

  connectedCallback () {
    if (this.$sliderItems.length > 1) {
      this.initSlider()
    }
  }

  initSlider () {
    const { options } = this.props
    const config = {
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      pagination: {
        el: this.$pagination.get(0),
        type: 'bullets',
        clickable: true
      },
      loop: 'true',
      a11y: options.a11y,
      effect: 'fade',
      speed: 1000
    }
    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }
    this.slider = new Swiper(this.$slider.get(0), config)
  }
}

window.customElements.define('flynt-slider-posts', SliderPosts, { extends: 'div' })
