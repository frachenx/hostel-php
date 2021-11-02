<?php
require_once("classes/student.php");
require_once("classes/user.php");
$user = User::fromID($_SESSION['user_id']);

$studentID = Student::idFromRegNum($user->regNum);
$hostelBooked = false;
if (!$studentID){
    $student = new Student();
}else{
    $student = Student::fromID($studentID);
    $hostelBooked = true;
}
