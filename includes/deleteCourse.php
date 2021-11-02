<?php
require_once("../classes/course.php");
if ($_SERVER['REQUEST_METHOD'] === "GET"){
    $course = Course::courseFromID($_GET['id']);
    $course->delete();
    header("Location: ../manage-courses.php");
}
