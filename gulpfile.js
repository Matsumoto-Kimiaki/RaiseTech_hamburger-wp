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
// const sassGlob = require("gulp-sass-glob");                      //lib Sassを使う場合
const sassGlob = require("gulp-sass-glob-use-forward");             //Dart Sassを使う場合
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require("gulp-autoprefixer");

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
//  タスク定義
//----------------------------------------------------------------------
exports.compile = series(compile);
exports.watch = series(compile,watchTask);

/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/