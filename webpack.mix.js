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

mix.js(['resources/assets/js/app.js', 
	'resources/assets/js/bootstrap.bundle.js', 
	'resources/assets/js/bootstrap.bundle.min.js',
	'resources/assets/js/bootstrap.js',
	'resources/assets/js/bootstrap.min.js',
	], 'public/js/all-js.js');
   
mix.styles(['resources/assets/css/app.css',
	'resources/assets/css/bootstrap.css',
	'resources/assets/css/bootstrap.min.css',
	'resources/assets/css/bootstrap-grid.min.css',
	'resources/assets/css/bootstrap-grid.css',
	'resources/assets/css/bootstrap-reboot.css',
	'resources/assets/css/bootstrap-reboot.min.css',
	], 'public/css/all-css.css');
