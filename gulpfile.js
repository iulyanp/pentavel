    var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.phpUnit();

    mix
        .sass('app.scss')
        .copy(
            'vendor/bower_components/jquery/dist/jquery.js',
            'resources/assets/js/vendors/jquery.js'
        ).copy(
            'vendor/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
            'resources/assets/js/vendors/bootstrap.js'
        ).copy(
            'vendor/bower_components/bootstrap-sass-official/assets/stylesheets/',
            'resources/assets/sass/bootstrap/'
        ).copy(
            'vendor/bower_components/bootstrap-sass-official/fonts/bootstrap',
            'public/fonts/bootstrap'
        ).copy(
            'vendor/bower_components/fonts-awesome/fonts/',
            'public/fonts/fonts-awesome'
        )
        .styles([
            'app.css',
            'clean-blog.css'
        ], 'public/css/all.css', 'public/css/')
        .styles([
            'all.css',
            'clean-blog.min.css'
        ], 'public/css/final/articles.css', 'public/css/')
        .scripts([
            'vendors/jquery.js',
            'vendors/bootstrap.js',
            'vendors/vue.js',
            'vendors/vue-resource.js',
            'clean-blog.js'
        ])
        .version('public/css/all.css')





});
