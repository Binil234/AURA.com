<?php 
session_start();
if(!isset($_SESSION['u_id'])){
    echo "<script>window.open('../login.php','_self')</script>";
}else{
$servername = "localhost";
$username = "root";
$user_pwd = "";
$dbName = "cms";


$con = mysqli_connect($servername , $username , $user_pwd , $dbName);

    if(!$con){
        die("Connection is failed".mysqli_connect_error());
     }  

     if(isset($_GET['del'])){
        $id = $_GET['del'];
        $del_query = "delete from al_user where u_id = $id";
        if(mysqli_query($con , $del_query)){
            echo "<script>alert('User is deleted..')</script>";
            echo "<script>window.open('all_users.php','_self')</script>";
            

        }
     }
    }


?>