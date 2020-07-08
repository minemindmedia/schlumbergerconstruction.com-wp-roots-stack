import Flickity from 'flickity';
import 'flickity-imagesloaded/flickity-imagesloaded.js';
export default {
  init() {
    // JavaScript to be fired on the home page
    var flkty = new Flickity( '.carousel', {
      // options
      lazyLoad: true,
      contain: true,
      pageDots: false,
      autoPlay: true,
      pauseAutoPlayOnHover: false,
      arrowShape: { 
        x0: 5,
        x1: 75, y1: 65,
        x2: 63, y2: 50,
        x3: 10,
      },
    });
    return flkty;
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
