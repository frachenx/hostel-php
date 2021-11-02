<?php
require_once("classes/room.php");
require_once("classes/course.php");
require_once("classes/user.php");
require_once("classes/student.php");

if (session_status()!=PHP_SESSION_ACTIVE ){
    session_start();
}
if($_SESSION['user_type']==="USER"){
    $user = User::fromID($_SESSION['user_id']);
}


function roomsCombo(){
    room::roomsCombo();
}

function coursesCombo(){
    Course::coursesCombo();
}

// $user = User::fromID($_SESSION['user_id']);

$studentID = Student::idFromRegNum($user->regNum);
$hostelBooked = false;
if ($studentID==0){
    $student = new Student();
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $room = $_POST['room'];
        $seater = $_POST['seater'];
        $fee = $_POST['fee'];
        $food = $_POST['food'];
        $dateFrom = $_POST['stayFrom'];
        $duration = $_POST['duration'];
    
        /* *************************************************** */
        $course = $_POST['course'];
        $regNum = $_POST['regNum'];
        $fName = $_POST['fName'];
        $mName= $_POST['mName'];
        $lName= $_POST['lName'];
        $gender = $_POST['gender'];
        $contactNum = $_POST['contactNum'];
        $email = $_POST['email'];
        $emergencyContact = $_POST['emContact'];
        $guardName = $_POST['guardName'];
        $guardRel = $_POST['guardRel'];
        $guardNum = $_POST['guardNum'];
        /* **************************************************** */
    
        $corAddress = $_POST['corAddress'];
        $corCity = $_POST['corCity'];
        $corState = $_POST['corState'];
        $corPin = $_POST['corPinCode'];
        
        $sameAddress = isset($_POST['sameAddress']) ? true : false ;
        $permAddress = $_POST['permAddress'];
        $permCity = $_POST['permCity'];
        $permState = $_POST['permState'];
        $permPin = $_POST['permPinCode'];
    
        /* **************************************************** */
        $registration;
        if ($sameAddress){
            $registration =  Student::fromData($room,$food,$dateFrom,$duration,$course,$regNum,$fName,$mName,$lName,$gender,$contactNum,$email,$emergencyContact,$guardName,$guardRel,$guardNum,$corAddress,$corCity,$corState,$corPin,$corAddress,$corCity,$corState,$corPin);
        }else{
            $registration =  Student::fromData($room,$food,$dateFrom,$duration,$course,$regNum,$fName,$mName,$lName,$gender,$contactNum,$email,$emergencyContact,$guardName,$guardRel,$guardNum,$corAddress,$corCity,$corState,$corPin,$permAddress,$permCity,$permState,$permPin);
        }
        $registration->add();
    }
}else{
    $student = Student::fromID($studentID);
    $hostelBooked = true;
}





