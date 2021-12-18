let mix = require('laravel-mix');

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

mix
/* CSS */
    .sass('resources/assets/sass/main.scss', 'public/css/oneui.css')
    .sass('resources/assets/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/city.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/flat.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/modern.scss', 'public/css/themes/')
    .sass('resources/assets/sass/oneui/themes/smooth.scss', 'public/css/themes/')

    /* JS */
    .js('resources/assets/js/laravel/app.js', 'public/js/laravel.app.js')
    .js('resources/assets/js/oneui/app.js', 'public/js/oneui.app.js')
    .js('resources/assets/js/main_counter.js', 'public/js/main_counter.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });

/* MISC */
mix.copy('resources/assets/images/', 'public/images/', false);
mix.copy('resources/assets/videos/', 'public/videos/', false);
mix.copy('resources/assets/plugins/', 'public/plugins/', false);

mix.sass('node_modules/flag-icon-css/sass/flag-icon.scss', 'public/css/');
mix.copy('node_modules/flag-icon-css/flags', 'public/flags', false);
