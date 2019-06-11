// Pull in dependencies
var gulp = require('gulp');
var plugin = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();

// Compile from SASS to CSS, Autoprefix and Minify, output to /dist
gulp.task('css', function() {
    return gulp.src('./src/scss/main.scss')
    .pipe(plugin.sass().on('error', plugin.sass.logError))
    .pipe(plugin.autoprefixer())
    .pipe(plugin.cleanCss())
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.stream());
});

// Combine and Minify JS and jQuery Files
gulp.task('js', function() {
    return gulp.src([ 
    './node_modules/jquery/dist/jquery.min.js',
    './src/js/*.js'
    ])
    .pipe(plugin.babel({
        presets: 'es2015'
    }))
    .pipe(plugin.concat('main.js'))
    .pipe(plugin.uglify())
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.stream());
});

// Live Reload
gulp.task('reload', function() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    })
    gulp.watch('*.html').on('change', browserSync.reload);
});

// Watch for changes in SASS and JS Files and run tasks
gulp.task('watch', function() {
    gulp.watch(['./src/scss/*.scss', './src/scss/**/*.scss'],['css']);
    gulp.watch(['./src/js/*.js'],['js']);
});

// Start all tasks
gulp.task('default', ['css', 'js', 'watch', 'reload']);