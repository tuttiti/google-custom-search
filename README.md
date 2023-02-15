# 設定

webroot/index.php の[YOUR_API_KEY], [YOUR_SEARCH_ENGINE_ID] を設定してください。


# Dockerの動かし方

Dockerfileからイメージをビルドするには、以下のようなコマンドを実行します。

```
$ docker build -t my-php-app .
```

このコマンドは、Dockerfileが存在するカレントディレクトリ内で実行してください。「my-php-app」は任意のイメージ名です。

イメージがビルドされたら、次にコンテナを作成して起動する必要があります。

```
$ docker run --name my-php-container -p 8080:80 -d my-php-app
```

このコマンドでは、「my-php-container」という名前でコンテナを作成しています。ホストのポート8080をコンテナ内のポート80にマッピングしています。「-d」オプションは、コンテナをバックグラウンドで実行することを示しています。「my-php-app」は先ほど作成したイメージ名です。

このコマンドが実行されると、Webアプリケーションがホストのポート8080で listen されるようになります。ブラウザで「http://localhost:8080」にアクセスすることで、Webアプリケーションを確認することができます。
