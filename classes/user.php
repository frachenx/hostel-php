<?php
require_once("database.php");
class User extends database
{
    public $id, $regNum, $fName, $mName, $lName, $gender, $contactNum, $email, $pwd;

    public static function fromValues($regNum_, $fName_, $mName_, $lName_, $gender_, $contactNum_, $email_, $pwd_)
    {
        $instance = new self();
        $instance->createUserFromValues($regNum_, $fName_, $mName_, $lName_, $gender_, $contactNum_, $email_, $pwd_);
        return $instance;
    }

    private function createUserFromValues($regNum_, $fName_, $mName_, $lName_, $gender_, $contactNum_, $email_, $pwd_)
    {
        $this->regNum = $regNum_;
        $this->fName = $fName_;
        $this->mName = $mName_;
        $this->lName = $lName_;
        $this->gender = $gender_;
        $this->contactNum = $contactNum_;
        $this->email = $email_;
        $this->pwd = $pwd_;
    }

    public static function Login($userEmail,$userPassword){
        $instance =  new self();
        $loggedIn = $instance->UserLogin($userEmail,$userPassword);
        if (!$loggedIn){
            return false;
        }else{
            return $instance;
        }
    }

    private function UserLogin($userEmail,$userPassword){
        $SQL = "SELECT * FROM USERS WHERE user_email= ? ";
        $conn = $this->connect();
        if ($conn){
            $stmt = $conn->prepare($SQL);
            if ($stmt){
                $stmt->bind_param("s",$userEmail);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_array();
                $hPwd = $row['user_password'];
                if (password_verify($userPassword,$hPwd)){
                    //logged in
                    $this->id = $row['user_id'];
                    $this->fName = $row['user_fname'];
                    $this->mName = $row['user_mname'];
                    $this->lName = $row['user_lname'];
                    $this->gender = $row['user_gender'];
                    $this->contactNum = $row['user_contact_num'];
                    $this->email = $row['user_email'];
                    return true;
                }else{
                    return false;
                }
            }else{
                echo "Query Error". mysqli_error($conn);
            }
        }else{
            echo "Connection Error" . mysqli_error($conn);
        }
    }

    public function __construct()
    {
    }

    public function addUser()
    {
        $conn = $this->connect();
        if (!$conn) {
            echo "Connection Failed". mysqli_connect_errno();
        } else {
            $stmt = $conn->prepare("INSERT INTO users (user_reg_num,user_fname,user_mname,user_lname,user_gender,user_contact_num,user_email,user_password) VALUES (?,?,?,?,?,?,?,?)");

            if (!$stmt) {
                echo $conn->error;
            } else {
                $hashPwd = password_hash($this->pwd,PASSWORD_BCRYPT);
                $stmt->bind_param("ssssssss", $this->regNum, $this->fName, $this->mName, $this->lName, $this->gender, $this->contactNum, $this->email, $hashPwd);
                $stmt->execute();
                // $result = $stmt->get_result();
                // $row = $result->fetch_array();
            }
        }

        
    }

    public static function fromID($id){
        $instance = new self();
        $SQL ="SELECT * FROM USERS WHERE user_id=?";
        $conn = $instance->connect();
        $stmt = $conn->prepare($SQL);
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->fetch_array();
        $instance->id=$row['user_id'];
        $instance->regNum=$row['user_reg_num'];
        $instance->fName=$row['user_fname'];
        $instance->mName=$row['user_mname'];
        $instance->lName=$row['user_lname'];
        $instance->gender=$row['user_gender'];
        $instance->contactNum=$row['user_contact_num'];
        $instance->email=$row['user_email'];
        $instance->pwd=$row['user_password'];
        return $instance;

    }

    public function updateUser(){
        $SQL = "UPDATE USERS SET user_reg_num=?,user_fname=?,user_mname=?,user_lname=?,user_gender=?,user_contact_num=?,user_email=?,user_password=? WHERE user_id=?";
        $conn =  $this->connect();
        $stmt = $conn->prepare($SQL);
        $stmt->bind_param("sssssssss",$this->regNum,$this->fName,$this->mName,$this->lName,$this->gender,$this->contactNum,$this->email,$this->pwd,$this->id);
        $stmt->execute();
    }

    
}
