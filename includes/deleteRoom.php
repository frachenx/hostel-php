<?php
require_once("../classes/room.php");
if ($_SERVER['REQUEST_METHOD'] === "GET"){
    $room = Room::newFromID($_GET['id']);
    if (!$room){
        echo"Query Failed";
    }else{
        $room->delete();
        header("Location: ../manage-rooms.php");
    }
    
}
