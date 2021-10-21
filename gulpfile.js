// Pull in dependencies
const {
	src,
	dest,
	parallel,
	series,
	watch
} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const plugin = require('gulp-load-plugins')();
const browserSync = require('browser-sync').create();

const files = {
	cssPath: "./src/scss/main.scss",
	jsPath: "./src/js/*.js"
};

// Compile SASS to CSS, autoprefix and minify, output to /dist
function cssTask() {
	return src(files.cssPath, {})
	.pipe(sass().on('error', sass.logError))
	.pipe(plugin.postcss([autoprefixer(), cssnano()]))
	.pipe(dest('./dist/css'))
	.pipe(browserSync.reload({stream: true}));
}

// Minify javascript
function jsTask() {
	return src([files.jsPath], {})
	.pipe(plugin.babel({
		presets: ['@babel/env']
	}))
	.pipe(plugin.uglify())
	.pipe(dest('./dist/js'))
	.pipe(browserSync.reload({stream: true}));
}

// BrowserSync init
function browserSyncInit() {
	browserSync.init({
		server: {
			baseDir: './'
		},
		port: 3000
	});
}

// BrowserSync reload
function browserSyncReload(done) {
	browserSync.reload();
	done()
}

// Watching files
function watchFilesTask() {
	watch(
		[files.cssPath, files.jsPath], {
			interval: 500
		},
		series(parallel(cssTask, jsTask))
	)
	watch('./*.html', browserSyncReload)
}

exports.default = series(parallel(cssTask, jsTask), parallel(browserSyncInit, watchFilesTask));