import 'bootstrap';
import $ from 'jquery';
require('jquery-sticky');

window.$ = window.jQuery = $;

// Import Popper.js (required for Bootstrap tooltips)
import 'popper.js';

// Enable Bootstrap tooltips globally
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
