<?php
if(isset($_POST['name'],$_POST['subject'],$_POST['message'])){
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = str_replace(PHP_EOL, '<br/>',htmlspecialchars($_POST['message']));
    $data = date("Y-m-d H:i:s");
    try{
        require_once('./DBInfo.php');
        $pdo = new PDO(DBInfo::DSN, DBInfo::USER, DBInfo::PASSWORD);

        $sql = "INSERT INTO bbs2 (date, name, subject, message) VALUES (?,?,?,?)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $data);
        $statement->bindValue(2, $name);
        $statement->bindValue(3, $subject);
        $statement->bindValue(4, $message);

        $pdo->beginTransaction();
        $statement->execute();
        $pdo->commit();
        $pdo = null;
    }
    catch(PDOException $e){
        if(isset($pdo) == true && $pdo->inTransaction() == true){
        $pdo->rollBack();
        }  
    }
}
header('location:./bbs.php');