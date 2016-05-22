var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename');

/* Task to compile sass */
gulp.task('styles',function(){
	return gulp.src('./includes/sass/style.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer())
    	.pipe(gulp.dest('./'))
    	.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    	.pipe(rename({suffix: '.expanded'}))
		.pipe(gulp.dest('./includes/css/'));
});

/* Task to watch sass changes */
gulp.task('watch', function () {
  gulp.watch('./includes/sass/**/*.scss', ['styles']);
});

/* Task when running `gulp` from terminal */
gulp.task('default', ['styles', 'watch']);