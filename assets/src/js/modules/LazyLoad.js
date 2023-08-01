class LazyLoad {
  constructor() {
    this.lazyLoadElements = [...document.querySelectorAll('.js-lazy-load')];
    this.observerOptions = {
      root: null,
      rootMargin: '-100px 0px -100px 0px',
      threshold: 0,
    };
    this.observer = new IntersectionObserver(
      this.lazyLoad,
      this.observerOptions
    );
    this.events();
  }

  events() {
    this.lazyLoadElements.forEach((el) => this.observer.observe(el));
  }

  lazyLoad(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('loaded');
      }
    });
  }
}

export default LazyLoad;
