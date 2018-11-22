// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint      = require('gulp-jshint');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var rename      = require('gulp-rename');
var cssmin      = require('gulp-cssmin');
var browserSync = require('browser-sync').create();

// Paths
var globalPath  = 'wp-content/themes/template1/';
var cssPath     = 'wp-content/themes/template1/scss/**/*.scss';
var jsPath      = 'wp-content/themes/template1/js/**/*.js';

gulp.task('bs', ['sass'], function() {
    browserSync.init({
        proxy: "localhost:8888/template1"
    });

    gulp.watch(globalPath + "**/*.php").on('change', browserSync.reload);
});

// Lint Task
gulp.task('lint', function() {
    return gulp.src(jsPath)
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});


// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src(cssPath)
        .pipe(sass({outputStyle: 'compressed'})
            .on('error', function (err) {
                console.log(err.toString());

                this.emit('end');
            })
        )
        .pipe(gulp.dest(globalPath + 'dist/css'))
        .pipe(browserSync.stream());
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src(jsPath)
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(globalPath + 'dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch(jsPath, ['lint', 'scripts']);
    gulp.watch(cssPath, ['sass']);
});

// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch', 'bs']);