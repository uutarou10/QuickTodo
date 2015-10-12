# QuickTodo
## このアプリについて
このアプリは東京工科大学の学園祭である紅華祭（こうかさい）の[LinuxClub](http://www2.linux.it.teu.ac.jp/linux/)の展示作品として作りました。

## 注意
* バグが取り切れていません
* 未実装の機能がたくさんあります。

## 使い方
使う人はいないとは思いますが念のため。
db_config.phpファイルをincludeディレクトリ内に作成し、DSN,BD_USER,DB_PASSという名前で定数を定義して、サーバーのルートディレクトリにぶん投げれば使えます。（たぶん）

## 使用技術
### サーバーサイド
* PHP
* MySQL

### フロントエンド
* BootStrap
    * BootStrapのテーマである[Honoka](https://github.com/windyakin/Honoka)を使用させていただきました。
