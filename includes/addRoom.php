<?php
require_once("classes/room.php");
if ($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['number']) && isset($_POST['seater']) && isset($_POST['fee'])){
    $room = Room::addRoom($_POST['number'],$_POST['seater'],$_POST['fee']);
}
