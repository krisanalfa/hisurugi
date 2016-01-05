var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix
        .sass('app.scss')
        .scripts([
            'node_modules/jquery/dist/jquery.js',
            'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        ], 'public/js/all.js', './')
        .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
        .copy('bower_components/lato/font', 'public/fonts/lato')
        .copy('bower_components/themify-icons-sass/fonts', 'public/fonts/themify');
});
