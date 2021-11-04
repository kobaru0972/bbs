<?php
$password = $_POST['password'];
try{
if ($password === "password") {
        $delete_ID =$_POST['delete_ID'];

        require_once('./DBInfo.php');
        $pdo = new PDO(DBInfo::DSN, DBInfo::USER, DBInfo::PASSWORD);

        $sql = 'DELETE FROM bbs2 WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $delete_ID);
        $pdo->beginTransaction();
        $statement->execute();
        $pdo->commit();
        $pdo = null;
    }
    header('location:./bbs.php');
}
catch(PDOException $e){
    if(isset($pdo) == true && $pdo->inTransaction() == true){
    $pdo->rollBack();
    header('location:./ADM.php');}  
}
