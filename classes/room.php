<?php
require_once("database.php");
class Room extends database{
    public $id,$roomNumber,$seater,$fee,$postingDate;
    public function __construct(){
    }

    public static function addRoom($roomNumber_,$seater_,$fee_){
        $instance = new self();
        $SQL = "INSERT INTO ROOMS (room_num,room_seater,room_fee) VALUES (?,?,?)";
        $conn = $instance->connect();
        $stmt = $conn->prepare($SQL);
        if (!$stmt){
            echo ("QueryError" . mysqli_error($conn));
            return false;
        }else{
            $stmt->bind_param("sss",$roomNumber_,$seater_,$fee_);
            if ($stmt->execute()){
                //INSERTED SUCCESFULLY
                return $instance;
            }else{
                echo ("QueryError" . mysqli_error($conn));
                return false;
            }
        }
    }

    public static function getRooms(){
        $instance = new self();
        $SQL ="SELECT * FROM ROOMS";
        $conn = $instance->connect();
        $stmt = $conn->prepare($SQL);
        if (!$stmt){
            return false;
        }else{
            if(!$stmt->execute()){
                return false;
            }else{
                $result = $stmt->get_result();
                if ($result->num_rows > 0){
                    $i=1;
                    while ($row = $result->fetch_array()){
                        echo '
                            <tr>
                                <td>'.$i.'</td>
                                <td>'.$row['room_seater'].'</td>
                                <td>'.$row['room_num'].'</td>
                                <td>'.$row['room_fee'].'</td>
                                <td>'.$row['room_post_date'].'</td>
                                <td>
                                    <a href="edit-room.php?id='.$row['room_id'].'" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="includes/deleteRoom.php?id='.$row['room_id'].'" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        ';
                        $i++;
                    }
                }else{return false;}
            }
        }
    }

    public static function newFromID($id){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT * FROM ROOMS WHERE room_id=?";
        $stmt = $conn->prepare($SQL);
        if (!$stmt){
            return false;
        }else{
            $stmt->bind_param("s",$id);
            if ($stmt->execute()){
                $result = $stmt->get_result();
                if ($result){
                    while($row = $result->fetch_array()){
                        $instance->id = $row['room_id'];
                        $instance->roomNumber = $row['room_num'];
                        $instance->seater = $row['room_seater'];
                        $instance->fee = $row['room_fee'];
                        $instance->postingDate = $row['room_post_date'];
                        return $instance;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }

    public function update(){
        $SQL = "UPDATE ROOMS SET room_seater = ?, room_fee=? WHERE room_id=?";
        $conn = $this->connect();
        $stmt = $conn->prepare($SQL);
        if (!$stmt){
            echo "QueryError".$conn->error;
        }else{
            $stmt->bind_param("sss",$this->seater,$this->fee,$this->id);
            $stmt->execute();
        }
        
    }
    
    public function delete(){
        $SQL = "DELETE FROM ROOMS WHERE room_id=?";
        $conn = $this->connect();
        $stmt = $conn->prepare($SQL);
        $stmt->bind_param("s",$this->id);
        $stmt->execute();
    }

    public static function roomsCombo(){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT * FROM ROOMS";
        $result = mysqli_query($conn,$SQL);
        if (mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                echo '
                    <option attrSeater="'.$row['room_seater'].'" attrFee="'.$row['room_fee'].'" value="'.$row['room_id'].'">'.$row['room_num'].'</option>
                ';
            }
        }
    }
}