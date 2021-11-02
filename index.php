<?php
    session_start();
    $_SESSION['user_type']="";
    $_SESSION['user_id']="";
    session_unset();
    header("Location: login.php");
?>