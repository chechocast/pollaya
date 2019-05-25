var gulp = require("gulp"),
    cssmin = require("gulp-cssmin"),
    watch = require("gulp-watch"),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify"),
    webserver = require("gulp-webserver"),
    sass = require("gulp-sass");


// compile sass files
gulp.task("css", function () {
    return gulp.src('./sass/styles.scss')
        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
        .pipe(cssmin({ keepSpecialComments: 0 }))
        .pipe(gulp.dest('./css/'));
});

gulp.task("js", function(){

var files = [
  'node_modules/jquery/dist.core.js',
  'node_modules/bootstrap/dist/js/bootstrap.js',
  'js/lightbox.min.js',
  'js/scripts.js'
];

  return gulp.src(files, { base: '.' })
        .pipe(concat("./js/app.js"))
        .pipe(uglify())
        .pipe(gulp.dest('.'));
});

//  conf web server
gulp.task('server', function() {
  gulp.src('')
    .pipe(webserver({
      // host: '192.168.1.57',
      // port: 8008,
      livereload: true
    }));
});

// watch task for sass files
gulp.task('watch', function () {
    gulp.watch('./sass/*.scss', ['css']);

});
// task for server wp
gulp.task('release', ['css', 'js']);

// default task
gulp.task('default', ['watch', 'css', 'js']);

gulp.task('develop', ['watch', 'css', 'js']);