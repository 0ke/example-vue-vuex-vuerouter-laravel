var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

elixir(function(mix) {
	mix.browserify('vue/main.js')
    .sass('app.scss')
    .scripts(['../../../node_modules/jquery/dist/jquery.min.js','../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js'])
    //.version(['css/all.css','js/all.js','js/main.js'])
    .browserSync({ proxy : 'uw url hier' });
});
