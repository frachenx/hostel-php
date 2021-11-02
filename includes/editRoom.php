<?php
require_once("classes/room.php");
if ($_SERVER['REQUEST_METHOD'] === "GET"){
    if (isset($_GET['id'])){
        $room = Room::newFromID($_GET['id']);
        if (!$room){
            $room =  new Room();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    if (isset($_POST['seater']) && isset($_POST['roomNum']) && isset($_POST['fees'])){
        $room = Room::newFromID($_GET['id']);
        if (!$room){
            exit();
        }
        $room->seater = $_POST['seater'];
        $room->fee = $_POST['fees'];
        $room->update();
    }
}