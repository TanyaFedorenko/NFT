'use strict';

var gulp = require('gulp'),

//SCSS
scss = require('gulp-sass')(require('sass')),

stripCssComments = require('gulp-strip-css-comments'),

//CSS optimization
cleanCSS = require('gulp-clean-css'),

//Add map for dev
sourcemaps = require('gulp-sourcemaps'),

//pass header to scss for RTL
// "gulp-header": "^2.0.9",
// header = require('gulp-header'), 

//Js uglify
uglify = require('gulp-uglify-es').default,

//File rename for RTL
// "gulp-rename": "^1.4.0",
// rename = require('gulp-rename'),

// make file loading simple
rigger = require('gulp-rigger'),

// autoprefixer
autoprefixer  = require('gulp-autoprefixer');

var path = {
    assetsSCSS: 'assets/css/',
    resourceSCSS: 'source/scss/**/*.scss',
    assetsJS: 'assets/js/',
    resourceJS: 'source/js/*.js'
};

gulp.task('scss', function () {
    return gulp
        .src(path.resourceSCSS)
        // .pipe(header('$is-rtl: true;\n')) // For RTL
        .pipe(sourcemaps.init())
        .pipe(scss().on('error', scss.logError))
        .pipe(autoprefixer( {cascade: false} ))
        .pipe(sourcemaps.write('.'))
        // .pipe(rename({suffix: '.rtl'})) // For RTL
        .pipe(gulp.dest(path.assetsSCSS));
});

gulp.task('scss:prod', function () {
    return gulp
        .src(path.resourceSCSS)
        // .pipe(header('$is-rtl: true;\n')) // For RTL
        .pipe(scss().on('error', scss.logError))
        .pipe(autoprefixer( {cascade: false} ))
        .pipe(cleanCSS({level: 2}))
        // .pipe(rename({suffix: '.rtl'})) // For RTL
        .pipe(stripCssComments())
        .pipe(gulp.dest(path.assetsSCSS));
});

gulp.task('js', function () {
    return gulp.src(path.resourceJS)
        .pipe(rigger())
        .pipe(gulp.dest(path.assetsJS))
});

gulp.task('js:prod', function () {
    return gulp.src(path.resourceJS)
        .pipe(rigger())
        .pipe(gulp.dest(path.assetsJS))
        .pipe(uglify())
        .pipe(gulp.dest(path.assetsJS))
});

gulp.task('watch', function () {
    gulp.watch(path.resourceSCSS, gulp.series('scss'));
    gulp.watch(path.resourceJS, gulp.series('js'));
});

gulp.task('prod', gulp.series('scss:prod', 'js:prod') );
gulp.task('dev', gulp.series('scss', 'js') );
//gulp.task('default', gulp.series('scss', 'js', 'watch') );
gulp.task('default', gulp.series('scss', 'watch') );