<?php
require_once("classes/user.php");
if($_SERVER['REQUEST_METHOD']==="POST"){
    $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
    if (session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    $user = User::fromID($_SESSION['user_id']);
    if (password_verify($old,$user->pwd)){
        if(($new === $confirm) && $new!=""){
            $hashPwd = password_hash($new,PASSWORD_BCRYPT);
            $user->pwd = $hashPwd;
            $user->updateUser();
            echo("
                <script>
                    alert('Password Updated Correctly')
                </script>
            ");
        }else{
            echo ("
                <script>
                    alert('New Password and Comfirm Password Must Match')
                </script>
            ");
        }
    }else{
        echo '
            <script>
                alert("Old Password is Incorrect")
            </script>
        ';
    }
}