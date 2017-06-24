var gulp = require('gulp'),
    sass = require('gulp-sass'),//Copila SCSS
    autoprefixer = require('gulp-autoprefixer'),//Autoprefixer
    browserSync = require('browser-sync').create(),//Recarga el navegador
    concat = require('gulp-concat'),//Concatena archivos js (hay ubo para css)
    uglify = require('gulp-uglify'),//Minifica JS
    cleanCSS = require('gulp-clean-css'),//Minifica CSS
    rename = require('gulp-rename'),//Renombra archivos
    notify = require('gulp-notify'),//Notificaciones
    sourcemaps = require('gulp-sourcemaps');//SourceMaps

gulp.task('sass', function () {
    gulp.src('./assets/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'expanded',
        sourceComments: true
    }))
    .on("error", notify.onError(
        {
          sound: true,
          title: 'Error de copilación SCSS'
        }
    ))
    .pipe(autoprefixer({
        versions: ['last 2 browsers']
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css/'));
});

gulp.task('minify-css', function () {
    gulp.src('./assets/css/style.css')
    .pipe(rename({
        suffix: '-dist'
    }))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css/'))
    .pipe(browserSync.stream())
    .pipe(notify({
        sound: false,
        message: 'Css Procesado',
        onLast: true
    }));

});

gulp.task('minify-js', function () {
    gulp.src('./assets/js/main.js')
    .pipe(uglify())
    .pipe(rename({
        suffix: '-dist'
    }))
    .pipe(gulp.dest('./assets/js/'))
    .pipe(notify({
        sound: false,
        message: 'Js Procesados',
        onLast: true
    }));
});

gulp.task('default', ['sass', 'minify-css', 'minify-js']);

gulp.task('watch', function () {
    browserSync.init({
        files: ['./*.php', './*.css', './*.js', './*.scss', './*.css'],
        proxy: "http://localhost/amano/",
        notify: true,
        open: "external"
    });
    gulp.watch('./assets/scss/**/*.scss', ['sass']);
    gulp.watch('./assets/css/**/*.css', ['minify-css']);
    gulp.watch('./**/*.php').on('change', function () {
        notify({
            sound: false,
            message: 'PHP Procesado',
            onLast: true
        }).write('');
        browserSync.reload();
    });
    gulp.watch('./assets/js/**/*.js', ['minify-js']).on('change', browserSync.reload);
});
