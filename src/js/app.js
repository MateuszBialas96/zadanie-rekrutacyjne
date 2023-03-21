import {
  Splide
} from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function() {

  new Splide('.siatka-linkow-slider', {
      mediaQuery: 'min',
      breakpoints: {
          950: {
              destroy: true,
          }
      },
  }).mount();

  new Splide('.opinie__slider', {
      autoplay: 1,
      type: 'loop',
      perPage: 1,
      autoWidth: true,
  }).mount();

});