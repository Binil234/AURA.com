<?php
session_start();
session_destroy();
echo "<script>window.open('login.php','_self');</script>";
$servername = "localhost";
$username = "root";
$user_pwd = "";
$dbName = "cms";


$con = mysqli_connect($servername , $username , $user_pwd , $dbName);

    if(!$con){
        die("Connection is failed".mysqli_connect_error());
     }  
?>


