import $ from 'jquery'

class BlockAnnouncement extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$buttonSubmenu = $('.close', this)
    this.$submenu = $('.container', this)
  }

  bindFunctions () {
    this.toggleSubmenu = this.toggleSubmenu.bind(this)
  }

  bindEvents () {
    this.$buttonSubmenu.on('click', this.toggleSubmenu)
  }

  toggleSubmenu (e) {
    this.$submenu.toggle()
  }
}

window.customElements.define('flynt-block-announcement', BlockAnnouncement, { extends: 'div' })
