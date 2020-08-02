require('./bootstrap')
require('jquery-lazy')
require('revslider')
require('before-after')
require('jquery-particles')
require('x-particles')
import foundation from 'foundation-sites';
jQuery(document).ready($ => ($(document).foundation()));
const axios = require('axios').default;
require('./custom')
$(function() {
    $('.lazy').Lazy();
});
// RsParticlesAddOn(revapi13);
setREVStartSize(
    {c: '#rev_slider_13_1', responsiveLevels: [1240,1240,778,480], gridwidth: [1200,1200,778,480], gridheight: [350,350,960,720], sliderLayout: 'fullscreen', fullScreenAutoWidth:'on', fullScreenAlignForce:'on', fullScreenOffsetContainer:'.header--style-1, .header--style-2,  #bar', fullScreenOffset:''});



