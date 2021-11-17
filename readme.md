# RaiseTech課題 ハンバーガーサイトのWordPress化
## 使用した環境
- macOS 11.6
- node 14.17.6
- npm 6.14.15
- gulp 4.0.2
## 説明
- Dart-Sassで記述
- gulpを使用
  - コマンド
    - 「npx gulp compile」でコンパイルします
    - 「npx gulp bs」で自動でブラウザーリロードします
    - 「npx gulp watch」でコンパイル＋ブラウザーリロード＋ファイル監視します
  - プラグイン
    - sass
    - gulp-sass
    - gulp-sass-glob-use-forward
    - gulp-autoprefixer
    - gulp-plumber
    - browser-sync