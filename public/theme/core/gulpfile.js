var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass')(require('sass'));
var uglify = require('gulp-uglifycss');
var browserSync = require('browser-sync').create();
var strip = require('gulp-strip-comments');

gulp.task('sass', function() {
    return gulp
        .src('./scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(rename({ suffix: '.min'}))
        .pipe(gulp.dest('../dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp
        .src('./js/*.js')
        .pipe(strip())
        .pipe(uglify())
        .pipe(rename({ suffix: '.min'}))
        .pipe(gulp.dest('../dist/js'))
        .pipe(browserSync.stream());
});

// gulp.task('sass', function () {
//     return gulp.src('./scss/*.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('../dist/css'));
// });

// gulp.task('minify', function() {
// });

// gulp.task('run', ['sass', 'minify']);

// gulp.task('watch', function() {
//     gulp.watch('./scss/*.scss', ['sass']);
//     gulp.watch('../dist/css/*.css', ['minify']);
// });

// gulp.task('default', ['run', 'watch']);