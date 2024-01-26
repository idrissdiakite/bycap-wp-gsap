import Block from './Block'
import store from '../util/store'

export default class Tombstones extends Block {
  getElems() {
    this.$tombstones = this.el.querySelectorAll('.archive__card')
  }

  events() {
    for (let i = 0; i < this.$tombstones.length; i++) {
      if (store.detect.isMobile) {
        this.$tombstones[i].addEventListener('click', this.toggle.bind(this, i))
      }
    }
  }

  toggle(i) {
    this.$tombstones[i].classList.toggle('show-back')
  }
}
