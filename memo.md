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
    - デフォルトを変更するには、
      - .htaccessファイルを使用する
        - Apache Webサーバーで使用される構成ファイル
          - ディレクトリのデフォルトファイルにsite.php、次にsite.htmlを使用したい場合 
            - その設定を適用したいディレクトリに`.htaccess`を作成
            - `.htaccess`内に`DirectoryIndex site.php site.html` を記述
          - メインのサーバー設定ファイルを編集することなく、特定のディレクトリに対してデフォルトのサーバー設定を上書きすることができる
# Hello World & Setup
PHPはHTMLと深く結びついていて，PHPファイル内でも普通にHTMLを記述することができる
# Writing HTML
# Variables
# Data Types
# Working With Strings
# Working With Numbers
# Getting User Input
# Building a Basic Calculator
# Building a Mad Libs Game
# URL Parameters
# POST vs GET
# Arrays
# Using Checkboxes
# Associative Arrays
# Functions
# Return Statements
# If Statements
# If Statements (con't)
# Building a Better Calculator
# Switch Statements
# While Loops
# For Loops
# Comments
# Including HTML
# Include: PHP
# Classes & Objects
# Constructors
# Object Functions - PHP - Tutorial 31
# Getters & Setters
# Inheritance