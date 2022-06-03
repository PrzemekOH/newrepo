
'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'))
const concat = require('gulp-concat');
// sass.compiler = require('node-sass');
gulp.task('sass', function () {
   return gulp.src('./assets/css/*.scss')
   .pipe(concat('style.css'))
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest('./'));
});


