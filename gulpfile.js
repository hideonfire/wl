// let mix = require('laravel-mix');

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
// mix.webpackConfig({

// })
// // mix.js('resources/assets/js/app.js', 'public/js')
//   // .sass('resources/assets/sass/app.scss', 'public/css');
// mix.less('resources/assets/less/style.less', 'public/css');

const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss');
    mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
    mix.styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.css',
        'resources/assets/vendor/animate/animate.css',
        'resources/assets/vendor/font-awesome/css/font-awesome.css',
        'resources/assets/vendor/chosen/bootstrap-chosen.css',
        'resources/assets/vendor/inputmask/inputmask.css'
    ], 'public/css/vendor.css', './');
    mix.scripts([
        'resources/assets/vendor/jquery/jquery-3.1.1.min.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.js',
        'resources/assets/vendor/inputmask/jquery.inputmask.bundle.js',
        'resources/assets/vendor/metisMenu/jquery.metisMenu.js',
        'resources/assets/vendor/slimscroll/jquery.slimscroll.min.js',
        'resources/assets/vendor/chosen/chosen.jquery.js',
        'resources/assets/vendor/pace/pace.min.js',
        'resources/assets/js/app.js'
    ], 'public/js/app.js', './');

});
