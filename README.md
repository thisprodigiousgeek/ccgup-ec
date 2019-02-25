# ccgup-ec

## 環境準備方法

### git clone

ホストOSで実行します。

```
cd $workspace/ccg/syncs/www/dev.lesson-codecamp.jp
rm -Rf ./webroot
git clone [リポジトリのurl] ./
```

### sqlの実行

ゲストOSにログインして実行します。

```
cd /vagrant/www/dev.lesson-codecamp.jp/webroot/schema
mysql -u codecamp_user -p codecamp_db < schema.sql
```

### 設定ファイルの修正

ホストOS上で下記設定ファイルを環境に合わせて修正します。

```
$workspace/ccg/syncs/www/dev.lesson-codecamp.jp/config/const.php
```

## 接続確認

`環境準備方法` が終わりましたら、下記にアクセスして接続確認をしましょう。  
[dev.lesson-codecamp.jp](http://dev.lesson-codecamp.jp)
