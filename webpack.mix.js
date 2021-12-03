const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/coreUI/css/prism.css',
    'resources/coreUI/css/simplebar.css',
    'resources/coreUI/css/vendors/simplebar.css',
    'resources/coreUI/css/style.css',

], 'public/css/app.css').scripts([
    'resources/coreUI/js/coreui.bundle.min.js',
    'resources/coreUI/js/simplebar.min.js',
    'resources/coreUI/js/prism.js',
    'resources/coreUI/js/prism-autoloader.min.js',
    'resources/coreUI/js/prism-unescaped-markup.min.js',
    'resources/coreUI/js/prism-normalize-whitespace.js',
    'resources/coreUI/js/chart.min.js',
    'resources/coreUI/js/coreui-chartjs.js',
    'resources/coreUI/js/coreui-utils.js',
    'resources/coreUI/js/main.js',
], 'public/js/app.js')
