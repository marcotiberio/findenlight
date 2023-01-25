import './scripts/publicPath'
import 'console-polyfill'
import 'normalize.css/normalize.css'
import './main.scss'
import 'core-js/es/number'
import 'swiper/swiper-bundle.css'
import './scripts/custom.js'
import './scripts/filters.js'
import './scripts/navigation.js'
// import './scripts/logo.js'
import $ from 'jquery'
import Swiper, { Navigation, A11y, Autoplay } from 'swiper/swiper.esm'
import feather from 'feather-icons'
import { appendMaps, initMap } from './scripts/map.js'
import smoothscroll from 'smoothscroll-polyfill'

import installCE from 'document-register-element/pony'

Swiper.use([Navigation, A11y, Autoplay])

window.jQuery = $

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
  global.initMap = initMap
  appendMaps()
})

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
})

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

smoothscroll.polyfill()

// main.js
// var msnry = new Masonry('.grid', {
//   itemSelector: '.grid-item',
//   columnWidth: 200
// })

importAll(require.context('../Components/', true, /\/script\.js$/))
require.resolve('./scripts/custom.js')
require.resolve('./scripts/filters.js')
require.resolve('./scripts/navigation.js')
require.resolve('./scripts/logo.js')
