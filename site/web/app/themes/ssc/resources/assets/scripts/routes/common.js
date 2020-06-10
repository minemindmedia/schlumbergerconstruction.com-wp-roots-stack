import 'alpinejs';
import lozad from 'lozad';
export default {
  init() {
    // JavaScript to be fired on all pages
    const observer = lozad();
    observer.observe();

    function setDocHeight() {
      document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);
  }
  addEventListener('resize', setDocHeight)
  addEventListener('orientationchange', setDocHeight)

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
