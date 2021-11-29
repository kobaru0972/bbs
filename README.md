# 掲示板
検索機能と管理者による削除機能がある掲示板です

![bbs](https://user-images.githubusercontent.com/92970448/141229444-0a6cfb76-a188-4aa6-94e6-250de1229c1c.PNG)

# 使用技術
* javascript
* php
* MySQL
* GitHub

# 機能一覧
* 見出しの折りたたみと展開機能
![fold](https://user-images.githubusercontent.com/92970448/142793635-abc9dcde-94da-4f32-96c2-ee2fb15c271a.gif)
* 投稿機能
![wright](https://user-images.githubusercontent.com/92970448/143796003-47c54e32-99c6-484c-8234-a09edd82a10c.gif)
* 検索機能
![serch](https://user-images.githubusercontent.com/92970448/142565405-df46d3f2-3c8c-4380-96a4-f58126c4c4fb.gif)
* 管理者ページへのログイン機能
![login](https://user-images.githubusercontent.com/92970448/143795962-329b5a90-c7da-4c86-934e-f8a21a02061d.gif)
* 管理者ページからの削除機能

# ポイント
* SQLインジェクション対策
* 入力フォームの入力補助機能
    ![wright03](https://user-images.githubusercontent.com/92970448/142791659-9e4ff777-9f3c-4241-99a0-ea807709731a.png)
* 検索フォームに % と _ を入力したしたときにSQLコマンドが正常に機能するように自動的にバックスラッシュでクォートでする機能

# 使用方法
* 記事の検索
    1. 記事の検索エリアをクリックする
    2. 展開された入力フォームに検索した文字列を入力する
    3. 「検索」ボタンをクリックする

* 記事の書き込み
    1. 新規記事の書き込みエリアをクリックする
    2. 展開された入力フォームのお名前、件名、メッセージ欄すべてに入力する
    3. 「書き込む」ボタンをクリックする

* 記事の削除
    1. 画面右下の「管理者ページ」のリンクをクリックする
    2. ユーザー名とパスワードを入力し、「ログイン」ボタンをクリックする
    3. 削除する記事のIDとパスワードを入力し、「削除」ボタンをクリックする

 # 改善点
 * 記事の削除前に確認システムを導入する
