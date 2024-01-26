import Block from './Block'
import SlideManager from '../util/SlideManager'
import gsap from 'gsap'

export default class SliderTeam extends Block {
  init() {
    this.index = 0
    this.current = -1
    this.opened = false
    this.sliding = false

    this.createSlider()
    this.initTeam()
  }

  getElems() {
    super.getElems()

    this.$block = this.el.nextElementSibling
    this.$cards = this.$block.querySelectorAll('.c-member')
    this.$wrapper_images = this.el.querySelector('.s-team-images')
    this.$images = this.$wrapper_images.querySelectorAll('.s-team-image')
    this.$items = this.$wrapper_images.querySelectorAll('.image')
    this.$container = this.el.querySelector('.s-team-container')
    this.$buttons = this.el.querySelector('.s-team-cross, .s-team-arrows')
    this.$wrapper = this.el.querySelector('.s-team-wrapper')
    this.$wrapperSlider = this.el.querySelector('.s-team-container-content')
    this.$contents = this.$wrapper.querySelectorAll('.s-team-content')
    this.$names = this.$wrapper.querySelectorAll('.s-team-name')
    this.$jobs = this.$wrapper.querySelectorAll('.s-team-position')
    this.$cursus = this.$wrapper.querySelectorAll('.s-team-cursus')
    this.$quotes = this.$wrapper.querySelectorAll('.s-team-quote')
    this.$pager_left = this.el.querySelector('.pagers--left')
    this.$pager_right = this.el.querySelector('.pagers--right')
    this.$cross = this.el.querySelector('.s-team-cross')
    this.$page = this.el.parentElement.parentElement
    this.slides = []

    for (let i = 0; i < this.$names.length; i++) {
      this.slides[i] = {
        image: this.$images[i],
        content: this.$contents[i],
        item: this.$items[i],
        job: this.$jobs[i],
        cursus: this.$cursus[i],
        quote: this.$quotes[i],
        name: this.$names[i]
      }
    }
  }

  events() {
    super.events()

    this.$pager_left && this.$pager_left.addEventListener('click', this.prevSlide.bind(this))
    this.$pager_right && this.$pager_right.addEventListener('click', this.nextSlide.bind(this))
    this.$cross && this.$cross.addEventListener('click', this.close.bind(this))

    for (let i = 0; i < this.$cards.length; i++) {
      this.$cards[i].addEventListener('click', this.goTo.bind(this, i))
    }
  }

  initTeam() {
    for (let i = 0; i < this.slides.length; i++) {
      gsap.set(this.el, {
        opacity: 0,
        pointerEvents: 'none'
      })
      gsap.set(this.slides[i].image, { yPercent: 101 })
      gsap.set(this.slides[i].item, {
        yPercent: -101,
        scale: 1.1
      })
      gsap.set([this.slides[i].name, this.slides[i].job, this.slides[i].cursus, this.slides[i].quote], {
        y: 30,
        opacity: 0
      })
      gsap.set(this.$container, { scaleY: 0 })
      gsap.set(this.$buttons, { opacity: 0 })
    }
  }

  createSlider() {
    this.slider = new SlideManager({
      el: this.$wrapperSlider,
      loop: true,
      callback: (event) => {
        this.last = event.previous
        this.current = event.new
        this.direction = event.direction

        this.onSlideChange()
        .then(() => {
          this.slider.done()
        })
      }
    })
  }

  onSlideChange() {
    return new Promise((resolve) => {
      this.tl = gsap.timeline({
        onComplete: () => {
          this.sliding = true

          resolve()
        }
      })

      this.sliding = false
      this.index++
      this.delay = 0.2

      gsap.set(this.slides[this.current].content, { zIndex: this.index })

      if (!this.opened) {
        this.tl.to([this.slides[this.last].name, this.slides[this.last].job, this.slides[this.last].cursus, this.slides[this.last].quote], {
          y: -30,
          opacity: 0,
          ease: 'power2.out',
          duration: 0.4,
          stagger: 0.05,
          onComplete: () => {
            gsap.set([this.slides[this.last].name, this.slides[this.last].job, this.slides[this.last].cursus, this.slides[this.last].quote], { y: 30 })
          }
        })

        this.delay = 0
      }

      this.tl
        .to(this.slides[this.current].image, {
          yPercent: 0,
          ease: 'power3.out',
          duration: 0.8,
          delay: this.delay,
          onStart: () => {
            gsap.set(this.slides[this.current].image, {
              zIndex: this.index
            })
          }
        })
        .to(this.slides[this.current].item, {
          yPercent: 0,
          scale: 1,
          ease: 'power3.out',
          duration: 0.8,
          onComplete: () => {
            if (this.last !== this.current) {
              gsap.set(this.slides[this.last].image, { yPercent: 101 })
              gsap.set(this.slides[this.last].item, {
                yPercent: -101,
                scale: 1.1
              })
            }
          }
        }, '<+=0')
        .to([this.slides[this.current].name, this.slides[this.current].job, this.slides[this.current].cursus, this.slides[this.current].quote], {
          y: 0,
          opacity: 1,
          ease: 'power2.out',
          duration: 0.6,
          stagger: 0.05
        }, '<+=0')

      this.opened = false
    })
  }

  prevSlide() {
    this.sliding && this.slider.prev()
  }

  nextSlide() {
    this.sliding && this.slider.next()
  }

  close() {
    this.current = -1
    this.$page.style.zIndex = 0

    gsap.to(this.el, {
      opacity: 0,
      ease: 'power3.out',
      duration: 0.5,
      pointerEvents: 'none',
      onComplete: () => {
        this.init()
      }
    })
    document.body.classList.remove('locked')
  }

  goTo(i) {
    this.current = -1
    this.opened = true
    this.ot = gsap.timeline({})
    this.$page.style.zIndex = 16
    document.body.classList.add('locked')

    this.ot
      .to(this.el, {
        opacity: 1,
        ease: 'power3.out',
        duration: 0.5,
        pointerEvents: 'all',
        onComplete: () => {
          this.slider.goTo(i)
        }
      })
      .to(this.$container, {
        scaleY: 1,
        ease: 'power2.out',
        duration: 0.3
      })
      .to(this.$buttons, {
        opacity: 1,
        ease: 'power3.out',
        duration: 0.5
      })
  }
}
