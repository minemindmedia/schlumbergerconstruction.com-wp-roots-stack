// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'
import 'slick-carousel/slick/slick.min';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import singlePortfolio from './routes/singlePortfolio';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Portfolio
  singlePortfolio,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());