var gulp = require('gulp');
var gutil = require('gulp-util');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify =  require('gulp-notify');
var sass = require('gulp-ruby-sass');
var coffee = require('gulp-coffee');
var exec = require('child_process').exec;
var sys = require('sys');

gulp.task('css', function(){
	return gulp.src('assets/sass/**/*.scss')
        .pipe(sass({style: 'compressed'}).on('error', gutil.log))
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))
        .pipe(notify({message: 'CSS compiled, prefixed and minified'}));
});

gulp.task('js', function () {
    return gulp.src('assets/coffee/**/*.coffee')
        .pipe(coffee().on('error', gutil.log))
        .pipe(gulp.dest('public/js'))
        .pipe(notify({message: 'JS compiled', sound: "Pop"}));
});

gulp.task('phpunit', function(){
   exec('phpunit', function(error, stdout) {
       sys.puts(stdout);
   });
});

gulp.task('watch', function(){
    gulp.watch('assets/sass/**/*.scss', ['css']);
    gulp.watch('assets/coffee/**/*.coffee', ['js']);
    gulp.watch('app/**/*.php', ['phpunit']);

});

gulp.task('default', ['css', 'js', 'phpunit', 'watch']);