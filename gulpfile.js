var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var elixir = require('laravel-elixir');
var rename = require("gulp-rename");

elixir.config.sourcemaps = false;

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

gulp.task('minify', function () {
	gulp.src('public/css/app.css')
		.pipe(cleanCSS())
		.pipe(rename('app.min.css'))
		.pipe(gulp.dest('public/css/', {'overwrite': true}));
});

elixir(function(mix) {
    mix.styles([
        '../../../public/css/animate.css',
        '../../../public/css/bootstrap.min.css',
        '../../../public/js/plugins/owl-carousel/owl.carousel.css',
        '../../../public/js/plugins/slick/slick-theme.css',
        '../../../public/js/plugins/slick/slick.css',
        '../../../public/css/ekko-lightbox.min.css',
        '../../../public/css/responsive.css',
        '../../../public/css/style.css'
    ], 'public/css/app.css')
	    .task('minify');
});
