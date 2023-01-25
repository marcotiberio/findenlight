import $ from 'jquery'

$(document).ready(function () {
  var headerHeight = $('header').outerHeight() // Target your header navigation here
  $('.menu-submenu li a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    // Store hash
    // var hashWithoutDash = this.hash.replace('/', '') // remove dash from hash to make $(hashWithoutDash).offset() worked

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

$(document).ready(function () {
  $('.accessibility-toggle').click(function () {
    $('.accessibility').toggleClass('inView')
  })
  $('.blackWhite').click(function () {
    $('html').toggleClass('high-contrast')
  })
  $('.fontSizebigger').click(function () {
    $('html').toggleClass('font-bigger')
    $('html').removeClass('font-smaller')
  })
  $('.fontSizesmaller').click(function () {
    $('html').toggleClass('font-smaller')
    $('html').removeClass('font-bigger')
  })
})

$(document).ready(function () {
  $('.overlay-toggle').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
  $('.overlay-close').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
})

// We listen to the resize event
$(document).ready(function () {
  // We execute the same script as before
  const vh = window.innerHeight * 0.01
  document.documentElement.style.setProperty('--vh', `${vh}px`)
})
