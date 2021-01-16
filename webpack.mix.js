const mix = require('laravel-mix');
mix.options({
  postCss: [
    require('autoprefixer')
  ],
  processCssUrls: false
});
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js' , 'public/js')
    .sass('resources/scss/app.scss' , 'public/css')
    .browserSync('http://localhost/woodcourt');
