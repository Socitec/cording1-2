const gulp = require('gulp');//gulp本体

//プラグイン
const sass = require('gulp-dart-sass');//Dart Sass はSass公式が推奨 @use構文などが使える
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const browserSync = require("browser-sync"); //ブラウザリロード
let imagemin = require('gulp-imagemin'); //画像圧縮


// 入出力するフォルダを指定
const srcBase = '../_static/src';
const assetsBase = '../_assets';
const distBase = '../';


const srcPath = {
  'scss': assetsBase + '/scss/**/*.scss',
  'html': srcBase + '/**/*.*',
  'js': assetsBase + '/javascript/**/*.js',
  'img': assetsBase + '/img/**/*.*'
};

const distPath = {
  'css': distBase + '/css/',
  'html': distBase + '/',
  'js': distBase + '/javascript/',
  'img': distBase + '/img/'
};

/**
 * sass
 *
 */
const cssSass = () => {
  return gulp.src(srcPath.scss, {
    sourcemaps: true
  })
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(sass({ outputStyle: 'expanded' })) //指定できるキー expanded compressed
    .pipe(gulp.dest(distPath.css, { sourcemaps: './' })) //コンパイル先
    .pipe(browserSync.stream())
    .pipe(notify({
      message: 'Sassをコンパイルしました！',
      onLast: true
    }))
}


/**
 * javascript圧縮
 */
const concat = require('gulp-concat');
  

const jsCompile = () => {
  return gulp.src(srcPath.js, {
    sourcemaps: true
  })
    .pipe(concat('script.js'))
    .pipe(gulp.dest(distPath.js, { sourcemaps: './' }))
}

/**
 * 画像圧縮
 */
const imageminimize = () => {
  return gulp.src(srcPath.img)
    .pipe(imagemin())
    .pipe(gulp.dest(distPath.img))
}

/**
 * html
 */
const html = () => {
  return gulp.src(srcPath.html)
    .pipe(gulp.dest(distPath.html))
}

/**
 * ローカルサーバー立ち上げ
 */
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
}

const browserSyncOption = {
  server: distBase
}

/**
 * リロード
 */
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * series 順番に実行
 * watch('監視するファイル',処理)
 */
const watchFiles = () => {
  gulp.watch(srcPath.scss, gulp.series(cssSass))
  gulp.watch(srcPath.html, gulp.series(html, browserSyncReload))
  gulp.watch(srcPath.js, gulp.series(jsCompile))
  gulp.watch(srcPath.img, gulp.series(imageminimize))
}

/**
 * seriesは「順番」に実行
 * parallelは並列で実行
 */
exports.default = gulp.series(
  gulp.parallel(html, cssSass, jsCompile, imageminimize),
  gulp.parallel(watchFiles, browserSyncFunc)
);