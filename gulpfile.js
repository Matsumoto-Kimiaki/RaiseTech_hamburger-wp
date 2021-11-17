//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const gulp = require("gulp");
const { src, dest, watch, series, parallel } = require("gulp");

const plumber = require("gulp-plumber");
const sassGlob = require("gulp-sass-glob-use-forward");
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require("gulp-autoprefixer");
const bs = require("browser-sync");

//----------------------------------------------------------------------
//  compile関数定義
//----------------------------------------------------------------------
function compile(done) {
  src("./sass/*.scss")
    .pipe(plumber())                   // watch中にエラーが発生してもwatchが止まらないようにする
    .pipe(sassGlob())                  // glob機能を使って@useや@forwardを省略する
    .pipe(sass())                      // sassのコンパイルをする
    .pipe(autoprefixer())              // ベンダープレフィックスを自動付与する
    .pipe(dest("./css/"));

  done();
}

//----------------------------------------------------------------------
//  watch関数定義
//----------------------------------------------------------------------
function watchTask(done) {
    // watch( "監視したいファイル(またはフォルダ)を指定" , 処理 );
    watch("./sass/**/*.scss" ,series(compile));
}

//----------------------------------------------------------------------
//  browserSync関数定義
//----------------------------------------------------------------------
function browserSync(done) {
  bs({
    files : ["./**/*.php", "./**/*.css", "./**/*.js"],        // "./**/*.scss"などファイルを変更したら更新させたいパスを追加する
    port : 80,                     // browsersyncサーバが使うポート番号を変更できる
    proxy : "hamburgershop.local",     // ローカルにある「Site Domain」に合わせる
    notify: false,                 // ブラウザ更新時に出てくる通知を非表示にする
    open: "external",              // ローカルIPアドレスでサーバを立ち上げる
  });

  done();
}


//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
exports.compile = series(compile);
exports.bs = series(browserSync);
exports.watch = series(compile,browserSync,watchTask);

/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/