const { mix } = require('laravel-mix');

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
 
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
  })
   .extract(['bootstrap-sass']);

mix.styles([
    'public/custom/css/styles.css',
    'public/custom/css/mobile_styles.css'
], 'public/css/custom_styles.css');

mix.js('public/custom/js/scripts.js', 'public/js/custom_scripts.js');