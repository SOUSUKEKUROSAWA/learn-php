---
title: "PHP学習メモ"
topics: ["PHP"]
---
# https://youtu.be/OK_JCtrrv-c
# Introduction
- スケーラブル
- 保守が容易
- HTMLとの統合に非常に優れている
- サーバーサイド言語
  - Webサーバー上で実行する
# Setup PHP on Docker
- PHPのイメージは`php:<version>-apache`がデフォルト
- ファイル名は`index.php`とする必要がある
  - この名前がデフォルトファイルとしてWebサーバーによって認識される特別なファイル名であるため
  - Webサーバーは、ディレクトリへのリクエストを受信すると、そのディレクトリ内にあるindex.htmlまたはindex.phpという名前のファイルを検索し、それをクライアントに提供します。
    - デフォルトを変更するには、`.htaccess`ファイルを使用する
      - Apache Webサーバーで使用される構成ファイル
        - ディレクトリのデフォルトファイルにsite.php、次にsite.htmlを使用したい場合 
          - その設定を適用したいディレクトリに`.htaccess`を作成
          - `.htaccess`内に`DirectoryIndex site.php site.html` を記述
        - メインのサーバー設定ファイルを編集することなく、特定のディレクトリに対してデフォルトのサーバー設定を上書きすることができる
    - 単に，URLを`<original-url>/site.php`とすることでもアクセス可能
- PHPファイルを提供するディレクトリは`/var/www/html/`がデフォルト
  - 変更することもできる
    - `httpd.conf`ファイルを作成
    - `DocumentRoot <directory path>`を追加
# Hello World & Setup
PHPはHTMLと深く結びついていて，PHPファイル内でも普通にHTMLを記述することができる
# Writing HTML
- echo
  - 引数をHTMLにレンダリングする

ページを更新するたびに，サーバはPHPコードを上から順に実行し，その結果をHTMLと統合し，ページに表示している
# Variables
- 変数は単なるコンテナであり，何か特定の情報を格納しておく
  - 代入時に型指定を行わなくてよい
# Data Types
- String
  - `$phrase = "To be ot not to be";`
  - `"`で囲われているモノは全て文字列と認識される
- Integer
  - `$age = -30;`
- Decimal（小数）
  - `$gpa = 2.45234;`
  - PHPでは`30`と`30.0`は区別される
- Boolean
  - `$isLogin = false;`
- Null
  - `null`
  - 値がないことを表す
# Working With Strings
- 小文字化
  - `strtolower($val);`
- 大文字化
  - `strtoupper($val);`
- 長さ
  - `strlen($val);`
- インデックス
  - `$val[index]`
  - indexは先頭文字からの距離を表す
  - 一度定義した文字列もインデックスを指定して変更することができる
    - `$val[0] = "a"`
- 置換
  - `str_replace("original", "new", $val);`
- 部分文字列
  - `substr($val, startindex, length)`
# Working With Numbers
- インクリメント
  - `$num++;`
  - 1以外の数値を足したい場合
    - `$num += 2.5`
- デクリメント
  - `$num--`
- 絶対値
  - `abs($num)`
- 累乗
  - `pow($num, exponent)`
- 平方根
  - `sqrt($num)`
- 比較
  - `max(num1, num2, num3, ...)`
  - `min(num1, num2, num3, ...)`
- 四捨五入
  - `round($num)`
- 切り上げ
  - `ceil($num)`
- 切り捨て
  - `floor($num)`
# Getting User Input
- フォームを設定する
  - `action`
    - このフォームを処理できるようにしたいPHPページの名前を設定する
  - `method`
    - このフォームで何をしようとしているのかを設定する
- 入力ボックスを設置する
  - `name`
    - 取得するコンテンツの種類を説明する名前
      - 一意である必要がある
- 送信ボタンを設置する
- PHPタグの中で入力を受け取り，処理を行う
  - フォームの入力データは`$_<method>[<name>]`でアクセスできる
  - 入力データはURLのパラメータ内に組み込まれて受け渡される
    - `<originalURL>/<action>?<name>=<input>&...`
# POST vs GET
- GET
  - ユーザーの入力がURLのパラメータを介してサーバに受け渡される
    - ブックマークしておける
    - ユーザーの入力が第三者に盗まれる・改変される恐れがある
- POST
  - ユーザーの入力がユーザーには見えない形でサーバに受け渡される
    - ユーザーの入力が見えないため，安全性が高い
# Arrays
- どんな型でも一緒に格納することができる
- 配列の値は個々に再代入可能
  - 元の値と異なるデータ型を再代入することも可能
- 配列の個数を追加することも可能
  - 再代入と同じ要領でできる
  - 飛び地のインデックスも指定できる
    - 飛び地の間のメモリは`undefined`のまま
# Using Checkboxes
- チェックがついた項目が配列になって受け渡される
# Associative Arrays（連想配列）
- キーとバリューのペアを格納する
  - キーは配列内で一意になる必要がある
# Building a Better Calculator
- `<input type="number" name="num1">`だと，整数しか受け付けず，小数の入力はエラーではじかれてしまう
  - `<input type="number" step="0.1" name="num1">`とすることで，0.1刻みの値を受け付けるように設定できる
# Including HTML
- 外部のHTMLファイルをインクルードする
  - HTMLファイルを再利用可能なコンポーネントに分けるという手法を取ることができる
    - 保守性の向上（ETC！）
# Include: PHP
- 機能としてはシンプルに外部コードを指定箇所へコピーしたうえでプログラムを実行しているだけ
- テンプレートファイルを作成し，それをインクルードして，そのファイルに変数の値を与えると，変数値ごとに異なったHTMLページを創り出すことができる
  - このように静的HTMLファイルだけでなく，動的なPHPファイルもインクルードして利用することができるのが，インクルードの利点
# Classes & Objects
- クラス
  - 通常のデータ型では表現できないものを表現するためのカスタムデータ型
    - クラス自体はテンプレートのようなもの
  - 現実世界の何かをモデル化することができる
- オブジェクト
  - クラスのインスタンス
    - カスタムデータ型（クラス）を使って実際に変数としてある帰るもの
# Constructors
- オブジェクト（クラスのインスタンス）作成されるたびに呼び出される関数のこと
  - `__construct`という名前を付けないと機能しない
  - オブジェクト作成時に引数を渡すことも可能
- `$this`
  - 作成中の現在のオブジェクトを参照する
# Object Functions
- クラス内で定義できる単なる関数
  - オブジェクトごとの値を利用できるのが利点
# Getters & Setters
- クラス内で定義できる特別な関数
  - クラスのアトリビュート（属性）に対するアクセスを制御できる
- 映画の評価などはある決まった表記があるが，それ以外の無効な評価もオブジェクトに受け渡すことができてしまう
  - 対処法
    - 特定の属性にアクセスできなくする
- クラス変数へのアクセス権
  - `public`，`var`
    - どこからでもアクセスできる
  - `private`
    - クラス外のコードからはアクセスできない
      - 編集や削除だけでなく，表示することもできない
  - https://www.tohoho-web.com/php/class.html#:~:text=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E6%A8%A9(var%2C%20public%2C%20protected%2C%20private)
- ゲッター
  - クラス内に定義する，特定の属性を取得して返す関数
- セッター
  - クラス内に定義する，特定の属性を更新する関数
    - 変数をprivateにし，クラス内で関数を定義することで，値を更新するためのゲートを設置することができる
    - コンストラクタ内にもセッターによるゲートを設置する必要があることに注意
# Inheritance（継承）
- あるクラスの中身をそのまま引き継いだクラスを作成することができる
  - 関数を追加して親クラスから拡張することができる
  - 親クラスの関数をオーバーライドすることもできる
    - 同じ名前を付ければいいだけ