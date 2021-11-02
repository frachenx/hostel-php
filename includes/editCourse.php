<?php
require_once("classes/course.php");
if ($_SERVER['REQUEST_METHOD'] ==="GET" && isset($_GET['id'])){
    $course = Course::courseFromID($_GET['id']);
    if (!$course){
        $course = new Course();
    }else{
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST" ){
    if (isset($_POST['code']) && isset($_POST['nameShort']) && isset($_POST['nameFull'])){
        $course = Course::courseFromID($_GET['id']);
        if (!$course){
        }else{
            $course->code = $_POST['code'];
            $course->shortName = $_POST['nameShort'];
            $course->fullName = $_POST['nameFull'];
            $course->update();
        }
    }
}