// SCSS
import '../scss/main.scss';

// JS Library
import 'iconify-icon';

// JS
import Project from './global-functions';
import initAnimation from './animation-classes';
import AOS from 'aos';
import 'aos/dist/aos.css';

import initNavigation from './parts/navigation';
import 'remixicon/fonts/remixicon.css';
import initScrollToTopButton from './parts/back-to-top';
import initBannerSlider from './patterns/banner-slider';
import initMovingSection from './parts/moving-section';

Project.ready(() => {
  initAnimation();
  initNavigation();
  initScrollToTopButton();
  initBannerSlider();
  initMovingSection();
});

document.addEventListener('DOMContentLoaded', () => {
  setTimeout(function () {
    AOS.init();
  }, 500);
});
