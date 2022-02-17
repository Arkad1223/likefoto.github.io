<?php
session_start();
include_once '../conn/conn.php';

$email = $_POST['emaillog'];
$password = $_POST['passlog'];
$password = md5($password);

$qsl = mysqli_query($conn,"SELECT * FROM `projreg` 
    WHERE `email` = '$email' AND `password` = '$password'");

if (isset($_POST['create'])){
    $user = mysqli_fetch_assoc($qsl);

    if (mysqli_num_rows($qsl) > 0 && $user){

        $_SESSION['userid'] = $user['id'];
        if ($user['id'] != ''){
            header("Location: ../user/userpage.php ");
        }
    }else{
        header("Location: ./login.php ");
    }

}