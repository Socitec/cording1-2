README
(1)概要
gulp.js（ビルドツール）で構築。

(2)環境構築
・ターミナルでプロジェクトのディレクトリに移動
cd _gulp
・ターミナルでローカルサーバーを起動
npx gulp

(3)gulpの実行内容
・Sassのコンパイル
_assets\scss\modulesにあるPC、TB、SPフォルダにあるscssファイルを編集
scssファイルを更新すると、_assets\scss\modules/style.scssでインポートされる
css\style.cssにコンパイルされる

・画像ファイル
画像は_assets\imgに保管する。
保管するとimgディレクトリに圧縮されて出力される。

・テーマファイル
_static\srcのphpファイルがテーマファイルとなる。
更新するとホームディレクトリに反映される。