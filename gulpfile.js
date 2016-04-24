var gulp = require('gulp'),
    del = require('del');
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    fileinclude = require('gulp-file-include'),
    livereload = require('gulp-livereload'),
    connect = require('gulp-connect');
    size = require('gulp-size');
    notify = require('gulp-notify');

var bases = {
    app: 'src/',
    dist: 'dist/',
};

// Clean
gulp.task('clean', function(cb) {
    del(['dist/css', 'dist/js', 'dist/img'], cb)
});

gulp.task('connect', function() {
    connect.server({
        root: bases.dist,
        livereload: true,
        port: 8080
    });
});

gulp.task('stylesMain', function() {
    return sass('src/styles/scss/style.scss', {
            style: 'expanded'
        })
        .pipe(gulp.dest(bases.dist + 'css'))
        .pipe(livereload());
});


gulp.task('scriptsMain', function() {
    return gulp.src('src/js/**/*.js')
        .pipe(gulp.dest(bases.dist + 'js/'));
});

gulp.task('admin', function() {
    return gulp.src('src/admin/**/*')
        .pipe(gulp.dest(bases.dist + 'admin/'));
});

//File include
gulp.task('html', function() {
    gulp.src('src/*.php')
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest(bases.dist))
        .pipe(livereload());
});

// Copy all other files to dist directly
gulp.task('copy', function() {
    // Copy images
    gulp.src('src/img/*.*', {
        base: bases.app
    }).pipe(gulp.dest(bases.dist));
    gulp.src('src/styles/scss/*.*', {
        base: bases.app
    }).pipe(gulp.dest(bases.dist));
    gulp.src('src/fonts/*.*', {
        base: bases.app
    }).pipe(gulp.dest(bases.dist));

    gulp.src('src/admin/**/*', {
        base: bases.app
    }).pipe(gulp.dest(bases.dist));

    gulp.src('src/styles/css/*.css')
      .pipe(gulp.dest(bases.dist + 'css/'));
});


gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('src/**/*', ['stylesMain', 'scriptsMain', 'html']);
		gulp.watch('src/admin/*', ['admin']);
		gulp.watch('src/admin/*.php', ['admin']);
		gulp.watch('src/admin/includes/*.php', ['admin']);
    gulp.watch('src/styles/scss/*.scss', ['stylesMain']);
    gulp.watch('src/js/**/*.js', ['scriptsMain']);
    gulp.watch('src/*.php', ['html']);
});

gulp.task('default', ['connect', 'stylesMain', 'scriptsMain', 'html', 'copy', 'watch'], function() {

});
