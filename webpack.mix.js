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

 // move fontawesome css
mix.copy("node_modules/@fortawesome/fontawesome-free/css/**/*", 'public/css/fontawesome-free/css');
//move fontawesome fonts
mix.copy("node_modules/@fortawesome/fontawesome-free/webfonts/**/*", 'public/css/fontawesome-free/webfonts');
// jquery.easing
mix.copy("node_modules/jquery.easing/*.js", 'public/js');
// magnific popup css
mix.copy("node_modules/magnific-popup/dist/*.css", 'public/css');
// magnific popup js
mix.copy('node_modules/magnific-popup/dist/*.js', 'public/js');
// custom js
mix.copy("resources//js/main.js", "public/js");
mix.copy("resources//js/custom.js", "public/js");

// jquery
mix.copy('node_modules/jquery/dist/*', 'public/js');
// boostrap
mix.copy('node_modules/bootstrap/dist/js/*', 'public/js/bootstrap')
// images
mix.copy('resources/images', 'public/images');

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/styles.scss", "public/css")
    .options({
        processCssUrls: false
    });
