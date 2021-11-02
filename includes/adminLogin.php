<?php
require_once("classes/admin.php");
if (isset($_POST['email']) && isset($_POST['pwd'])){
    $admin =  Admin::Login($_POST['email'],$_POST['pwd']);
    if(!$admin){
        header("Location: admin-login.php");
    }else{
        session_start();
        $_SESSION['user_type']="ADMIN";
        $_SESSION['user_id'] = 1;
        header("Location: dashboard.php");
    }
}