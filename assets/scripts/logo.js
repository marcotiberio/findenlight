import $ from 'jquery'

// Desktop Homepage Animation
// Static variables - That do not change while scrolling
var header = $('header')
var headerHeight = header.height() // Get height of header
var logoWrapper = $('.logo') // Get the logo
var logo = $('.logo-image') // Get the logo
var logoHeight = logo.height() // Get logo height
var scrollTo = 120 // Animation until scrolled to this point

// Scroll function
$(window).on('scroll', function () {
  console.log(headerHeight)
  // Dynamic variables - That do change while scrolling
  var yPos = $(this).scrollTop() // Get the scroll Y-position
  var yPer = (yPos / scrollTo) // Calculate percenage of scroll

  // If percentage is over 100, set to 100
  if (yPer > 1) {
    yPer = 1
  }
  // Dynamic variables for the elements
  var logoPos = (-1 * (yPer * 70) + 70) // Calculate position of logo (starting from 50%)
  var logoSize = ((headerHeight * yPer * 0.35) - (logoHeight * yPer) + logoHeight) // Calculate new size height for logo
  var headerPos = ((yPer * headerHeight) - headerHeight) // Calculate position of header (starting from minus the height of itself)

  // Change the top, left, transform and height of the logo
  logoWrapper.css({
    top: logoPos + '%'
  })
  logo.css({
    height: logoSize
  })
})
