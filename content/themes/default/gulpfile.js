"use strict";

var gulp = require('gulp'),
  //concat = require('gulp-concat'),
  sass = require('gulp-sass')(require('sass')),
//   del = require('del'),
//   uglify = require('gulp-uglify'),
//   cleanCSS = require('gulp-clean-css'),
//   rename = require("gulp-rename"),
//   merge = require('merge-stream'),
  autoprefixer = require('gulp-autoprefixer'),
//   babel = require('gulp-babel'),
//   webpack = require('webpack-stream'),
//   replace = require('gulp-replace'),
  browserSync = require('browser-sync').create();
  













// Compile SCSS(SASS) files
gulp.task('compileScss', function() {
    return gulp.src(['./scss/*.scss'])
      .pipe(sass.sync({
        outputStyle: 'expanded'
      }).on('error', sass.logError))
      .pipe(autoprefixer())
      .pipe(gulp.dest('./css/new-css'));
  });
  gulp.task('scss', gulp.series('compileScss'));
  

// // Minify CSS
// gulp.task('css:minify', gulp.series('scss', function cssMinify() {
//   return gulp.src("./dev-assets/css/*.css")
//     .pipe(cleanCSS())
//     .pipe(rename({
//       suffix: '.min'
//     }))
//     .pipe(gulp.dest('./assets/css'))
//     .pipe(browserSync.stream());
// }));



// Configure the browserSync task and watch file path for change
gulp.task('dev', function browserDev(done) {
  browserSync.init({
    proxy: 'fyrestream.local/index.php',
    //port: 8000,
    serveStatic: ['.'],
    files: ['**/*.css', '**/*.js', '**/*.php'],
    // server: {
    //   baseDir: "./"
    // }
  });
  gulp.watch(['scss/*.scss','scss/**/*.scss'], gulp.series('scss', function cssBrowserReload (done) {
    browserSync.reload();
    done(); //Async callback for completion.
  }));
  done();
});

// // Build task
// gulp.task("build", gulp.series(gulp.parallel('css:minify', 'js:scripts', 'vendor'), 'vendor:build', function copyAssets() {
//   return gulp.src([
//     "dev-assets/img/**",
//     "dev-assets/fonts/**",
//     "dev-assets/webfonts/**",
//     "dev-assets/js/**/*.js",
//     "!dev-assets/js/app.js",
//     "dev-assets/css/**",
//   ], { base: './dev-assets/'})
//     .pipe(gulp.dest('assets'));
// }, function copyhtmls(){
//   return gulp.src([
//     'html/*.html',
    
//   ], { base: './html/'})
//     .pipe(gulp.dest('html/generated-html'));
// }));

// Default task
// gulp.task("default", gulp.series( "clean",'build', 'replaceHtmlBlock'));

