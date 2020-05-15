export default {
  init() {
    // JavaScript to be fired on the home page
    $('.portfolio-carousel').slick({
      centerMode: true,
      slidesToShow: 1,
      variableWidth: true,
      lazyLoad: 'progressive',
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
