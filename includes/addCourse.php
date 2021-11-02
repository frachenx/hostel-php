<?php
require_once("classes/course.php");
if (isset($_POST['cCode']) && isset($_POST['cNameShort']) && isset($_POST['cNameFull'])){
    $course = Course::addCourse($_POST['cCode'],$_POST['cNameShort'],$_POST['cNameFull']);
    if (!$course){
        // echo "Failed Query";
    }else{
        // echo "Added row succesfully";
    }
}