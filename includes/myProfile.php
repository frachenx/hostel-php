<?php
require_once("classes/user.php");
if (session_status()!=PHP_SESSION_ACTIVE ){
    session_start();
}
if($_SESSION['user_type']==="USER"){
    $user = User::fromID($_SESSION['user_id']);
}

if ($_SERVER['REQUEST_METHOD']==="POST"){
    $user->regNum = $_POST['regNum'];
    $user->fName = $_POST['fName'];
    $user->mName = $_POST['mName'];
    $user->lName = $_POST['lName'];
    $user->gender = $_POST['gender'];
    $user->contactNum = $_POST['contact'];
    $user->email = $_POST['email'];
    $user->updateUser();
}