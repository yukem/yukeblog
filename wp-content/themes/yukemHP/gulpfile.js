// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

// style.scssをタスクを作成する
gulp.task("css-minify", function(done){
  // style.scssファイルを取得
    gulp
      .src("css/styles.scss")
      // Sassのコンパイルを実行
      .pipe(sass())
      .pipe(cleanCSS())
      .pipe(rename({
        extname: '.min.css'
      }))
      // cssフォルダー以下に保存
      .pipe(gulp.dest("css"))
      done();
});

// style.scssをタスクを作成する
gulp.task("js-minify", function(done){
  // style.scssファイルを取得
    gulp
      .src("js/main.js")
      // Sassのコンパイルを実行
      .pipe(uglify())
      .pipe(rename({
        extname: '.min.js'
      }))
      // cssフォルダー以下に保存
      .pipe(gulp.dest("js"))
      done();
});