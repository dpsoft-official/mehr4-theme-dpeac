const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public')
    .js('resources/js/app.js','')
    .autoload({ jquery: ['$', 'window.jQuery', 'jQuery'] })
    .sass('resources/sass/app.scss','')
    .version()
    .copy('public','../../public/vendor/mehr4-theme-dpeac');
