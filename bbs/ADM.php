<?php
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login']) == false || $_SESSION['login'] != true){
		header('location:./login.html');
	}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>管理者ページ</title>
        <link href="ADM.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="ADM.js"></script>
    </head>
    <body>
        <main>
            <article>
                <div class="smallTitle_delete_area smallTitle_area">
                    <h3 class="smallTitle">記事の削除</h3>        
                </div>
                <diV class="text_delete_area text_area">

                    <p>次の項目を入力し、「削除」ボタンをクリックしてください。</p>
                    <form action="./bbs_delete.php" method="post">
                        <div class="input_area">
                            <p class="float_left">記事のID</p>
                            <input type="text" class="input_box float_right" required pattern="^[0-9]+$" title="半角数字で入力してください" name="delete_ID">
                        </div>
                        <div class="input_area">
                            <p class="float_left">パスワード</p>
                            <input type="password" class="input_box password_box float_right" maxlength ="8" required pattern="^([0-9A-Za-z]{4,8})+$" title="4～8文字の半角英数字で入力してください" name ="password">
                            <p><label><input type="checkbox" class="password_checkbox">パスワードを表示する</label></p>
                        </div>
                        <input type="submit" value="削除">
                    </form>
                </div>
            </article>
        </main>        
    </body>
</html>