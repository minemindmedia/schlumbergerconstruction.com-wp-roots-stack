import 'alpinejs';
import lozad from 'lozad';
export default {
  init() {
    // JavaScript to be fired on all pages
    const observer = lozad();
    observer.observe();

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
      if (scroll >= 120) {
          $('header').addClass('sticky');
      } else {
          $('header').removeClass('sticky');
      }
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    // When the user scrolls the page, execute myFunction
    
  },
};
