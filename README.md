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
* 投稿機能
* 検索機能
* 管理者ページへのログイン機能
* 管理者ページからの削除機能

# 使用方法
* 記事の書き込み
    1. 新規記事の書き込みエリアをクリックする
    2. 展開された入力フォームのお名前、件名、メッセージ欄すべてに入力する
    3. 「書き込む」ボタンをクリックする

* 記事の検索
    1. 記事の検索エリアをクリックする
    2. 展開された入力フォームに検索した文字列を入力する
    3. 「検索」ボタンをクリックする  

* 記事の削除
    1. 画面右下の「管理者ページ」のリンクをクリックする
    2. ユーザー名とパスワードを入力し、「ログイン」ボタンをクリックする
    3. 削除する記事のIDとパスワードを入力し、「削除」ボタンをクリックする  
        テストアカウント  
            ユーザー名：user  
            パスワード：password    
        をお使いください。


# ポイント
* 検索機能で記事の絞り込みが可能。
    ![serch](https://gyazo.com/11eca04d17eb0505fb0298c213ba9275.gif)
* 管理者ページの削除機能で不適切な記事をIDとPASSを知っている人だけが削除できるようにした。
    ![delate](https://gyazo.com/f9fd2ef275632e0b6ced8082aee83717.gif)
* SQLインジェクション対策
* 入力フォームの入力補助機能
    ![wright](https://gyazo.com/465d212e5cc7875de53499ca80a0a2f1.gif)
* 検索フォームに % と _ を入力したしたときにSQLコマンドが正常に機能するように自動的にバックスラッシュでクォートでする機能

 # 改善点
 * 記事の削除前に確認システムを導入する
