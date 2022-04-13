// ========================================================
// Template Name: Affan - PWA Mobile HTML Template
// Author: Designing World
// Author URL: https://themeforest.net/user/designing-world
// ========================================================

'use strict';

const {src, dest, parallel, series, watch} = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const pug = require('gulp-pug');

// Move JS Files to dist/js
function js() {
    return src([
            'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
            'node_modules/apexcharts/dist/apexcharts.min.js',
            'node_modules/tiny-slider/dist/min/tiny-slider.js',
            'node_modules/vanilla-rangeslider/js/rangeslider.min.js',
            'node_modules/counterup2/dist/index.js',
            'node_modules/vanilla-datatables/dist/vanilla-dataTables.min.js',
            'node_modules/imagesloaded/imagesloaded.pkgd.min.js',
            'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
            'node_modules/baguettebox.js/dist/baguetteBox.min.js'
        ])
        .pipe(dest('dist/js'));
}

// Move CSS to dist/css
function css() {
    return src([
            'node_modules/apexcharts/dist/apexcharts.css',
            'node_modules/bootstrap-icons/font/bootstrap-icons.css',
            'node_modules/tiny-slider/dist/tiny-slider.css',
            'node_modules/vanilla-rangeslider/css/rangeslider.css',
            'node_modules/vanilla-datatables/dist/vanilla-dataTables.min.css',
            'node_modules/baguettebox.js/dist/baguetteBox.min.css'
        ])
        .pipe(dest('dist/css'));
}

// CSS Autoprefixer
function cssAutoprefixer() {
    return src('node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(postcss([ autoprefixer( {overrideBrowserslist: ['last 2 versions']} )]))
        .pipe(dest('dist/css/'));
}

// Move Bootstrap Icons to dist/fonts
function bootstrapIcons() {
    return src('node_modules/bootstrap-icons/font/fonts/*')
        .pipe(dest('dist/css/fonts'));
}

// Move all Static Images to dist/img
function staticImages() {
    return src('static/img/*/*')
        .pipe(dest('dist/img'));
}

// Move all Static JS to dist/js
function staticJS() {
    return src('static/js/*')
        .pipe(dest('dist/js'));
}

// Move all Static files to dist/
function staticFiles() {
    return src('static/*')
        .pipe(dest('dist/'));
}

// SCSS to CSS Convert
function sassToCSS() {
    return src('src/scss/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([ autoprefixer( {overrideBrowserslist: ['last 2 versions']} )]))
        .pipe(dest('dist/'))
}

// Pug to HTML Convert
function pugToHTML() {
    return src('src/pug/*.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(dest('dist/'));
}

// SCSS - Pug Watching
function watching() {
    watch('src/scss/*.scss', series(sassToCSS));
    watch(['src/pug/*.pug', 'src/pug/inc/*.pug'], series(pugToHTML));
    watch('static/img/*/*', series(staticImages));
    watch('static/js/*', series(staticJS));
    watch('static/*', series(staticFiles));
}

const watchAll = parallel(watching);

// exports
exports.default = series(js, css, cssAutoprefixer, bootstrapIcons, staticImages, staticJS, staticFiles, sassToCSS, pugToHTML, watching);
exports.watch = watchAll;