<?php

if(isset($_POST['user']) == true && $_POST['user'] !=''){
    $user = $_POST['user'];
}

if(isset($_POST['user']) == true && $_POST['user'] !=''){
    $password = $_POST['password'];
}

if ($user == 'user' && $password == 'password') {

    session_start();
    session_regenerate_id(true);
    $_SESSION['login'] = true;
    header('location:./ADM.php');
}

else {
    header('location:./bbs.php');
   
}

