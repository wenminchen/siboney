var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename');

gulp.task('styles',function(){
	return gulp.src('./includes/sass/style.scss')
		.pipe(sass({ style: 'expanded' }).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gulp.dest('./'))
		.pipe(rename({suffix: '.min'}))
		.pipe(minifycss())
    	.pipe(gulp.dest('./includes/css/'));
});

gulp.task('watch', function () {
  gulp.watch('./includes/sass/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);