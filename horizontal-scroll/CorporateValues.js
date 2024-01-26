import store from '../util/store'
import Block from './Block'

export default class CorporateValues extends Block {
  init() {
    this.resize()

    this.el.style.height = this.width + 'px'
  }

  getElems() {
    this.$wrapper = this.el.querySelector('.horizontal-scroll__wrapper')
    this.$lastEl = this.el.querySelector('.horizontal-scroll__last')
  }

  progress(p) {
    if (!store.detect.isMobile) {
      this.$wrapper.style.transform = `translate3d(${-(this.width - store.w.w) * p}px, 0, 0)`
    }
  }

  resize() {
    this.width = this.$lastEl.getBoundingClientRect().right + store.w.w / 13 + 5
  }
}
