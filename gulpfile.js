'use strict';
var gulp = require('gulp');
var minifyCSS = require('gulp-csso');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var refresh = require('gulp-refresh');
 
gulp.task('stream', function () {
    // Endless stream mode 
    return watch('assets/css/style.css', { ignoreInitial: false })
        .pipe(gulp.dest('assets/css'));
});
 
gulp.task('sass', function () {
  return gulp.src('assets/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('assets/css'))
});
 
gulp.task('sass:watch', function () {
  gulp.watch('assets/scss/style.scss', ['sass']);
});

gulp.task('css', function(){
  return gulp.src('assets/css/style.css')
    .pipe(refresh())
    .pipe(minifyCSS())
    .pipe(gulp.dest('assets/css'))
});

gulp.task('default', [ 'stream', 'sass', 'sass:watch', 'css' ]);