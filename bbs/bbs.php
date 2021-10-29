<?php
    if (empty($_GET['search'])) {
        $search="";
    }
    else{
        $search=$_GET['search'];
    }
    
    if($search != ''){
        $search_sanitize =htmlspecialchars($search);
        $search_addcslashes =  addcslashes ( $search , '%' );
        $search_word_text = "<br>メッセージに <spon class=\"search_word\">{$search_sanitize}</spon> を含む記事";
        $sql = "SELECT * FROM bbs2 WHERE message LIKE '%$search_addcslashes%' ORDER BY id DESC";
    }
    else {
        $search_word_text ='なし'; 
        $sql = 'SELECT * FROM bbs2 ORDER BY id DESC';
    }
    
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link href="bbs.css" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./bbs.js"></script>
    </head>
    <body>
        <header id="TOP">
            <h1>タイトル</h1>
        </header>
        <main>
            <noscript>
                <p>JavaScriptを有効にしてください。</p>
            </noscript>
            <article>
                <h2>メニュー</h2>
                <article>
                    <div class="smallTitle_search_area smallTitle_area">

                        <h3 class="smallTitle">記事の検索</h3>
                        <img src="./image/button-minus.png" class="botton_img">
                    </div>
                    <diV class="text_search_area text_area">

                        <p>次の項目を入力し、「検索」ボタンをクリックしてください。</p>
                        <form action="./bbs.php" method ="get">
                            <input type="text" class="input_box" name="search">をメッセージに含む記事<br>
                            <input type="submit" value="検索">
                        </form>
                    </diV>
                </article>
                <article>
                    <div class="smallTitle_write_area smallTitle_area">
                        <h3 class="smallTitle">新規記事の書き込み</h3>
                        <img src="./image/button-minus.png" class="botton_img">
                    </div>
                    <diV class="text_write_area text_area">
                        <p>次の項目を入力し、「書き込む」ボタンをクリックしてください。</p>
                        <form action="bbs_insert.php" method="post">
                            <div>
                                <p class="float_left">お名前</p>
                                <input type="text" class="input_box" name="name" required>
                            </div>
                            <div>
                                <p class="float_left">件名</p>
                                <input type="text" class="input_box" name="subject" required>
                            </div>

                            <div>
                                <p class="float_left">メッセージ</p><textarea cols="40" rows="4" name="message" required></textarea>
                            </div>
                            <input type="submit" value="書き込む">
                        </form>
                    </diV>
                </article>
                <article>
                    <h2 class="h2title">記事一覧</h2>
                    <p>検索条件:
                        <?php 
                            print($search_word_text);
                        ?>
                    </P>
                    <?php
                        try{
                            require_once('./DBInfo.php');

                            $pdo = new PDO(DBInfo::DSN, DBInfo::USER, DBInfo::PASSWORD);
                            $statement = $pdo->query($sql);

                            if (empty($statement->fetch())){
                                print("<p class = \"nodata_text\">検索条件に一致する書き込みはありません<P>");
                            }
                            else {
                                $statement = $pdo->query($sql);
                                print('<table>
                                        <thead>
                                            <tr>
                                                <td class="cell_ID">ID</td>
                                                <td class="cell_day">投稿日時</td>
                                                <td class="cell_name">お名前</td>
                                                <td class="cell_subject">件名</td>
                                                <td class="cell_message">メッセージ</td>
                                            </tr>
                                        </thead>
                                        <tbody>');
                                while($row = $statement->fetch()){
                                    print('<tr>');
                                    print("<td>{$row[0]}</td>");
                                    print("<td>{$row[1]}</td>");
                                    print("<td>{$row[2]}</td>");
                                    print("<td>{$row[3]}</td>");
                                    print("<td class=\"cell_message_text\">");
                                    print($row[4]);
                                    print("</td>");
                                    print('</tr>');
                                }
                                print('</tbody></table><br>');
                            }
                        }

                        catch(PDOException $e){
                            $code = $e->getCode();
                            $message =$e->getMessage();
                            print("{$code}/{$message}<br/>");
                        }
                    ?>
    
                </article>
            </article>
        </main>
        <footer>
            <div class="footer_box">
                <a href="#TOP" class="top_link">TOP</a>
                <a href="./ADM.php" class="ADM_link">管理者ページ</a>
            </diV>
        </footer>      
    </body>

</html>