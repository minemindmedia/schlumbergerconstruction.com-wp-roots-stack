import Flickity from 'flickity';
export default {
  init() {
    // JavaScript to be fired on the home page
    var flkty = new Flickity( '.carousel', {
      // options
      lazyLoad: true,
      contain: true,
      pageDots: false,
    });
    return flkty;
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
