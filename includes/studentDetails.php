<?php
require_once("classes/student.php");

$student = Student::fromID($_GET['id']);
