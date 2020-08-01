require('./bootstrap')
require('jquery-lazy')

import foundation from 'foundation-sites';

jQuery(document).ready($ => ($(document).foundation()));
const axios = require('axios').default;

require('./custom')

$(function() {
    $('.lazy').Lazy();
});
