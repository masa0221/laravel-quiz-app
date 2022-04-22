## 目次
<!-- TOC -->

- [概要](#%E6%A6%82%E8%A6%81)
- [準備](#%E6%BA%96%E5%82%99)
    - [1. ダウンロード](#1-%E3%83%80%E3%82%A6%E3%83%B3%E3%83%AD%E3%83%BC%E3%83%89)
    - [2. 環境変数用のファイルを用意](#2-%E7%92%B0%E5%A2%83%E5%A4%89%E6%95%B0%E7%94%A8%E3%81%AE%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E7%94%A8%E6%84%8F)
    - [3. composer を使ってパッケージをインストール](#3-composer-%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E3%83%91%E3%83%83%E3%82%B1%E3%83%BC%E3%82%B8%E3%82%92%E3%82%A4%E3%83%B3%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AB)
    - [4. sail コマンドのエイリアスを作成](#4-sail-%E3%82%B3%E3%83%9E%E3%83%B3%E3%83%89%E3%81%AE%E3%82%A8%E3%82%A4%E3%83%AA%E3%82%A2%E3%82%B9%E3%82%92%E4%BD%9C%E6%88%90)
        - [起動時にエイリアスを設定する方法](#%E8%B5%B7%E5%8B%95%E6%99%82%E3%81%AB%E3%82%A8%E3%82%A4%E3%83%AA%E3%82%A2%E3%82%B9%E3%82%92%E8%A8%AD%E5%AE%9A%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95)
- [起動 / 停止](#%E8%B5%B7%E5%8B%95--%E5%81%9C%E6%AD%A2)
    - [起動](#%E8%B5%B7%E5%8B%95)
    - [停止](#%E5%81%9C%E6%AD%A2)
- [操作](#%E6%93%8D%E4%BD%9C)
    - [composer の実行](#composer-%E3%81%AE%E5%AE%9F%E8%A1%8C)
    - [npm(Node.jsのパッケージマネージャ)を利用](#npmnodejs%E3%81%AE%E3%83%91%E3%83%83%E3%82%B1%E3%83%BC%E3%82%B8%E3%83%9E%E3%83%8D%E3%83%BC%E3%82%B8%E3%83%A3%E3%82%92%E5%88%A9%E7%94%A8)
        - [パッケージをインストール](#%E3%83%91%E3%83%83%E3%82%B1%E3%83%BC%E3%82%B8%E3%82%92%E3%82%A4%E3%83%B3%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AB)
        - [npmで定義されたコマンドを実行](#npm%E3%81%A7%E5%AE%9A%E7%BE%A9%E3%81%95%E3%82%8C%E3%81%9F%E3%82%B3%E3%83%9E%E3%83%B3%E3%83%89%E3%82%92%E5%AE%9F%E8%A1%8C)
    - [DB(mysql)の直接操作](#dbmysql%E3%81%AE%E7%9B%B4%E6%8E%A5%E6%93%8D%E4%BD%9C)
        - [mysqlコンテナ内で動いているMySQLへログイン](#mysql%E3%82%B3%E3%83%B3%E3%83%86%E3%83%8A%E5%86%85%E3%81%A7%E5%8B%95%E3%81%84%E3%81%A6%E3%81%84%E3%82%8Bmysql%E3%81%B8%E3%83%AD%E3%82%B0%E3%82%A4%E3%83%B3)
        - [データベースを作成（初回のみ）](#%E3%83%87%E3%83%BC%E3%82%BF%E3%83%99%E3%83%BC%E3%82%B9%E3%82%92%E4%BD%9C%E6%88%90%E5%88%9D%E5%9B%9E%E3%81%AE%E3%81%BF)
    - [Laravel artisan を実行](#laravel-artisan-%E3%82%92%E5%AE%9F%E8%A1%8C)
        - [セキュリティのためのキーを（ APP_KEY ）を生成](#%E3%82%BB%E3%82%AD%E3%83%A5%E3%83%AA%E3%83%86%E3%82%A3%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%82%AD%E3%83%BC%E3%82%92-app_key-%E3%82%92%E7%94%9F%E6%88%90)
        - [ルートを確認](#%E3%83%AB%E3%83%BC%E3%83%88%E3%82%92%E7%A2%BA%E8%AA%8D)
        - [コントローラを作成](#%E3%82%B3%E3%83%B3%E3%83%88%E3%83%AD%E3%83%BC%E3%83%A9%E3%82%92%E4%BD%9C%E6%88%90)
        - [データベースのマイグレーション用ファイルを作成](#%E3%83%87%E3%83%BC%E3%82%BF%E3%83%99%E3%83%BC%E3%82%B9%E3%81%AE%E3%83%9E%E3%82%A4%E3%82%B0%E3%83%AC%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E7%94%A8%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E4%BD%9C%E6%88%90)
        - [DBのリセット](#db%E3%81%AE%E3%83%AA%E3%82%BB%E3%83%83%E3%83%88)
        - [モデルを作成](#%E3%83%A2%E3%83%87%E3%83%AB%E3%82%92%E4%BD%9C%E6%88%90)

<!-- /TOC -->


## 概要
- PHPのWebフレームワーク Laravel で作成されたWebアプリケーションのサンプルです


## 準備
### 1. ダウンロード
```
git clone -b unimplemented https://github.com/masa0221/laravel-quiz-app.git
```
※`unimplemented`は何も実装されていないブランチです。もし完成形を見たい場合は`-b unimplemented`を外してください

clone できたら、以下でディレクトリを移動してください。
```
cd laravel-quiz-app
```


### 2. 環境変数用のファイルを用意
`.env` の内容が環境変数(サーバーの中で利用できる変数)になります
```
cp .env.example .env
```


### 3. `composer` を使ってパッケージをインストール
`composer` というパッケージ管理を使ってパッケージのインストールをします。  
※ `composer` を使うと https://packagist.org/ で管理されているパッケージがインストールされます。

```
docker run --rm -it -u $UID:$GID -v $(pwd):/app -w /app composer:2.2.7 composer install
```
※ `composer install` コマンドを実行すると、 `composer.json` に記述されているパッケージが `./vendor/` ディレクトリ以下にインストールされます  
※ [composer:2.2.7](https://hub.docker.com/layers/composer/library/composer/2.2.7/images/sha256-d75df114c4f3179780cb2402bb0d996e0fa7da4674756a2d184ea161bd908e9f?context=explore) のDockerイメージを使います。


### 4. `sail` コマンドのエイリアスを作成
Laravel の `sail` コマンドは、 `docker-compose` コマンドをかんたんに叩くことができるものです。  
Dockerの上で動いているLaravelや、DB(mysql)などの操作が行いやすくなるので、エイリアス(ショートカット)を作成しておきましょう。

※ `cat ./vendor/bin/sail` で具体的にどういうコマンドが実行されているか見ることができます  
  または https://github.com/laravel/sail/blob/v1.13.5/bin/sail を参照
 

```
alias sail='bash vendor/bin/sail'
```
※シェルを起動したときに、再度設定する必要があります。  
 面倒な方は以下のように起動時の設定を追加しておいてください。


#### 起動時にエイリアスを設定する方法

利用しているシェルを確認
```
echo $SHELL;
```
- bashの場合 => `~/.bashrc` ファイルにaliasのコマンドを追記
- zshの場合  => `~/.zshrc` ファイルにaliasのコマンドを追記
- ほか       => さては初心者ではないですね...! ( 「シェル名 Run-Control Files」で検索してください )


```
echo "alias sail='bash vendor/bin/sail'" >> ~/.bashrc
```
※`~/.bashrc` の部分は利用しているシェルによって適宜変更してください。


## 起動 / 停止
`sail` コマンドを使った起動方法をまとめています。  
※ 前述の通り `sail` は、内部的には `docker-compose` を実行しているだけなので、`docker-compose` のコマンドと基本的には同じです。

### 起動
`docker-compose.yml` に書いている構成でDockerコンテナを起動します。

```
sail up -d
```
※ `-d` オプションをつけずに実行するとコンテナのログが見える状態になります(`Ctrl` + `C` を押す(同時押しする)と停止します)  


### 停止
```
sail down
```

保存しているDBの情報もすべて削除したい場合は -v オプションを付けてください。
```
sail down -v
```


## 操作
ここでは、コンテナが起動している状態の操作についてまとめています。

### composer の実行
laravelのコンテナが起動している場合は、laravelのコンテナの中にあるcomposerを実行することができます。
```
sail composer install
```


### npm(Node.jsのパッケージマネージャ)を利用
Node.jsのパッケージマネージャにあたるnpmを動かすことができます。

#### パッケージをインストール
以下のコマンドで `package.json` に書いているパッケージをインストールできます。  
パッケージは `node_modules` ディレクトリ以下に配置されます。

```
sail npm install
```


#### npmで定義されたコマンドを実行
`package.json` の `scripts` に書いているコマンドを実行します。  
以下の例では、`scripts` の `dev` に書いているコマンドが実行されます。  
(`npm run development`が実行されるので結果的に、`webpack.js` が実行されます。

```
sail npm run dev
```
※ 最終的に `public` ディレクトリ以下にjsとcssが配置されます。 （詳しくはwebpackの仕様を参照）


### DB(mysql)の直接操作
#### mysqlコンテナ内で動いているMySQLへログイン
```
sail mysql
```
以下を見ると分かる通り `root` ユーザーでMySQLにログインしています。  
https://github.com/laravel/sail/blob/v0.0.8/bin/sail#L178-L180

#### データベースを作成（初回のみ）
最初はデータベースが存在しないので作成してください。  
（`sail mysql`をしてMySQLにログインした後に実行してください）

以下でデータベースの一覧が見れます。
```sql
SHOW DATABASES;
```

以下でデータベース `quiz_app` を作成できます。
```sql
CREATE DATABASE `quiz_app`;
```


### Laravel artisan を実行
Laravel 操作は主に `artisan` というコマンドを使います。  
本来は `php artisan xxx` という形で実行しますが、Dockerで動いている場合は `sail` コマンドを使うとかんたんに実行できます

```
sail artisan
```
以下を見ると分かる通り、内部的にはdocker-composeでphpのコンテナの中にある、phpコマンドを使ってartisanを動かします。  
https://github.com/laravel/sail/blob/v0.0.8/bin/sail#L98-L101

`artisan` は、様々なコマンドを実行できるので、具体的には `artisan` のヘルプを見てください。

例として、よく使うものを記載しておきます。

#### セキュリティのためのキーを（ `APP_KEY` ）を生成
Laravelには暗号化やセキュリティのための様々な機能が備わっています。  
それらの機能では、アプリケーション固有のハッシュ値（ `APP_KEY` の値）を利用します。

以下のコマンドを実行すると、 `.env` ファイルのAPP_KEYにハッシュ値が設定されます。
```
sail artisan key:generate
```

#### ルートを確認
`routes` ディレクトリ以下のファイルに設定されているルートの設定を見ることをができます。
```
sail artisan route:list
```


#### コントローラを作成
`app/Http/Controllers` ディレクトリ以下にコントローラのクラスを作成します。  
以下の例では、`QuizzesController` が作成されます。

```
sail artisan make:controller QuizzesController
```


#### データベースのマイグレーション用ファイルを作成
データベースのテーブルを追加/削除したり、テーブル構成を変更するためのファイルを作成します。  
以下の例では、 `quizzes` テーブルを作成するためのファイルが作成されます。

```
sail artisan make:migration create_quizzes_table --create=quizzes
```


#### DBのリセット
DBの構成をリセットして、マイグレーション用の設定を再度一つずつ実行します。

```
sail artisan migrate:refresh
```
これを実行するとデータが無くなりますが構成がリセットされ初期状態になります。  
※ 予めデータが登録された状態を作りたい場合は、 `make:seeder` を使ってください。


#### モデルを作成
`app/Http/Models` ディレクトリ以下にモデルのクラスを作成します。  
以下の例では、`Quiz` が作成されます。
```
sail artisan make:model Quiz
```
