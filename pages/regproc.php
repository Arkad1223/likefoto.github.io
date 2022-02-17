<?php
include_once '../conn/conn.php';

$name = $_POST['namereg'] ;
$email = $_POST['emailreg'];
$password = $_POST['passreg'];
$password = md5($password);


$qr = mysqli_query($conn,"INSERT INTO `projreg` 
    (`name`,`email`,`password`) VALUES ('$name','$email','$password')");

    header("Location: ./login.php");


?>