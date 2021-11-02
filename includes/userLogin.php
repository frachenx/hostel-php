<?php
require_once("classes/user.php");
if (isset($_POST['email']) && isset($_POST['pwd'])){
    $user =  User::Login($_POST['email'],$_POST['pwd']);
    if(!$user){
        header("Location: index.php");
    }else{
        session_start();
        $_SESSION['user_type']="USER";
        $_SESSION['user_id'] = $user->id;
        header("Location: dashboard.php");
    }
}

