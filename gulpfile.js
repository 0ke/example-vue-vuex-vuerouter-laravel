var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

elixir(function(mix) {
	mix.browserify('vue/main.js')
    .sass('app.scss')
    .scripts(['./node_modules/jquery/dist/jquery.min.js',
    	'./node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    	'./node_modules/fontawesome/index.js'])
    //.version(['css/all.css','js/all.js','js/main.js'])
    .browserSync({ proxy : 'localhost:8000' });
});
