## 概要
- PHPのWebフレームワーク Laravel で作成されたWebアプリケーションのサンプルです


## 準備
### 1. ダウンロード
```
git clone https://github.com/masa0221/laravel-quiz-app.git
```
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
docker run --rm -it -v $PWD:/app -w /app composer composer install
```
※ `composer install` コマンドを実行すると、 `composer.json` に記述されているパッケージが `./vendor/` ディレクトリ以下にインストールされます


### 4. `sail` コマンドのエイリアスを作成
Laravel の `sail` コマンドは、 `docker-compose` コマンドをかんたんに叩くことができるものです。  
Dockerの上で動いているLaravelや、DB(mysql)などの操作が行いやすくなるので、エイリアス(ショートカット)を作成しておきましょう。

※ `cat ./vendor/bin/sail` で具体的にどういうコマンドが実行されているか見ることができます  
  または https://github.com/laravel/sail/blob/v0.0.8/bin/sail を参照
 

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


### npmで定義されたコマンドを実行
`package.json` の `scripts` に書いているコマンドを実行します。  
以下の例では、`scripts` の `dev` に書いているコマンドが実行されます。  
(`npm run development`が実行されるので結果的に、`webpack.js` が実行されます。

```
sail npm run dev
```
※ 最終的に `public` ディレクトリ以下にjsとcssが配置されます。 （詳しくはwebpackの仕様を参照）


### DB(mysql)の直接操作
mysqlコンテナ内で動いているMySQLを操作できます。
```
sail mysql
```
以下を見ると分かる通り `root` ユーザーでMySQLにログインしています。  
https://github.com/laravel/sail/blob/v0.0.8/bin/sail#L178-L180


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
sail artisan migrate:refres
```
これを実行するとデータが無くなりますが構成がリセットされ初期状態になります。  
※ 予めデータが登録された状態を作りたい場合は、 `make:seeder` を使ってください。


#### モデルを作成
`app/Http/Models` ディレクトリ以下にモデルのクラスを作成します。  
以下の例では、`Quiz が作成されます。
```
sail artisan make:model Quiz
```
