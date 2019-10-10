現金出納帳アプリ
====

このアプリはユーザごとに現金出納帳を管理できるアプリです。  
なおここではWebサーバにMAMPを使用する前提で説明を行います。  
## MAMPの設定
MAMPのインストールは以下から行えます。  
https://www.mamp.info/en/downloads/  
MAMPの起動を行なった後に、Prefarenses内ののPortsの設定が  
MySQL Port: 8889  
となっていることを確認してください。  
## データベース
ターミナルからMAMP/Library/bin/に移動しsqlコマンドを入力することでMAMPのデータベースを操作できます。  
./mysql -u root -p
でルートユーザとしてログインしてください。パスワードはデフォルトでrootとなっています。
ログイン後に、HouseholdAccounts.sqlを実行してください。
## ファイルの配置
### htdocs
htdocs内のファイルは全てMAMPのhtdocsフォルダの直下に配置してください。  
### lib
libフォルダはMAMP直下に配置してください。  
## 動作について
以上の処理が終了したら、以下のURLからWebアプリを使用できます。
http://localhost:8888/index.php
最初はテーブル内にはレコードが存在しないのでアカウントの作成を行なってから各種操作を行なってください。
