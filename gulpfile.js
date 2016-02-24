var elixir = require('laravel-elixir'),
    path = require('path');

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

elixir.config.sourcemaps = true;

elixir(function(mix) {
    mix.sass([
        'styles.scss',
        'viejooeste.scss',
        'cabin.scss'
    ]);
    mix.sass('modal.scss', 'public/css/modal.css');
});

elixir(function(mix) {
    mix.coffee('map.coffee', 'public/js/map.js', null);
    mix.coffee('Utils.coffee', 'public/js/Utils.js', null);
    mix.coffee('viejooeste.coffee', 'public/js/viejooeste.js', null);
    mix.coffee('modal.coffee', 'public/js/modal.js', null);
});