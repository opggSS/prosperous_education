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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/main.scss','public/css')
    .options({
        processCssUrls: false,
    });
mix.sass('resources/sass/application.scss', 'public/css')
    .options({
        processCssUrls: false,
    });
// mix.sass('resources/sass/elite.scss', 'public/css')
//     .options({
//         processCssUrls: false,
//     });
