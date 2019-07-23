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

/* ---------------------------------------------------
    Voyo Admin 
-----------------------------------------------------*/

// Voyo List of JS Files
const voyoJsArray = [
	'resources/voyo/inc/jquery/jquery-2.1.0.min.js',
	'resources/voyo/inc/bootstrap/js/bootstrap.min.js',
	'resources/voyo/inc/jquery.appear.js',
	'resources/voyo/inc/retina.min.js',
	'resources/voyo/inc/jflickrfeed.min.js',
	'resources/voyo/js/script.js'
];

mix.scripts(voyoJsArray, 'public/js/voyo.js');

// Voyo List of Css Files
const voyoCssArray = [
	'resources/voyo/inc/bootstrap/css/bootstrap.min.css',
	'resources/voyo/inc/font-awesome/css/font-awesome.min.css',
	'resources/voyo/inc/animate.css',
	'resources/voyo/css/style.css'
];

mix.styles(voyoCssArray, 'public/css/voyo.css');

// Voyo Font File Copy Directory
mix.copyDirectory('resources/voyo/inc/font-awesome/fonts', 'public/fonts');
// Voyo Image File Copy Directory
mix.copyDirectory('resources/voyo/images', 'public/images');
