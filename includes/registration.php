<?php
require_once("classes/user.php");

if (isset($_POST['regNum']) && isset($_POST['fName']) && isset($_POST['mName']) && isset($_POST['lName']) && isset($_POST['gender']) && isset($_POST['contactNum']) && isset($_POST['email']) && isset($_POST['pwd'])) {
    $regNum = $_POST['regNum'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $gender = $_POST['gender'];
    $contactNum = $_POST['contactNum'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $user =  User::fromValues($regNum, $fName, $mName, $lName, $gender, $contactNum, $email, $pwd);
    $user->addUser();
}
