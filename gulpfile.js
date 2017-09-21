/*
gulp.task('default', () => {
    return gulp.src('src/app.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest('dist'))
        .pipe(gulp.dest('./dist/'));
});
*/

/*
* Dependencias
*/
var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify');
const babel = require('gulp-babel');

/*
* Configuración de la tarea 'demo'
*/
gulp.task('poly', function () {
  gulp.src('js/source/*.js')
  .pipe(concat('main.js'))
  .pipe(uglify())
  .pipe(gulp.dest('js/'))
});



gulp.task('watch', function() {
  gulp.watch('js/source/*.js', ['poly']);
});
