const mix = require('laravel-mix');

mix.setPublicPath('public')
   .js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/views', 'public/views')
   .sourceMaps();
