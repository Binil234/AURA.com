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
        
        if(isset($_GET['del_post'])){
            $p_id = $_GET['del_post'];
            $del_query = "delete from al_post where p_id = $p_id";
            if(mysqli_query($con,$del_query)){
                $logged_user = $_SESSION['u_id'];
                $user = "select * from al_user where u_id = $logged_user";
                $obj = mysqli_query($con , $user);
                $row = mysqli_fetch_array($obj);
                
                if($row['u_is_admin']=='True'){
                    echo "<script>alert('Post is deleted...');</script>";
                    echo "<script>window.open('all_posts.php','_self');</script>";

                }else{
                    echo "<script>alert('Post is deleted...');</script>";
                    echo "<script>window.open('your_posting.php','_self');</script>";
                }
                

            }
        }
    }
?>