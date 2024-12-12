<?php

   $servername = "localhost";
   $username = "root";
   $user_pwd = "";
   $dbName = "cms";
   
   
   $con = mysqli_connect($servername , $username , $user_pwd , $dbName);
   
       if(!$con){
           die("Connection is failed".mysqli_connect_error());
        }
?>  
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Home Page</span></a>
            </li>
            <?php
                $logged_user = $_SESSION['u_id'];
                $user = "select * from al_user where u_id = $logged_user";
                $obj = mysqli_query($con , $user);
                $row = mysqli_fetch_array($obj);
            
                if($row['u_is_admin']=='True'){ ?>
                    

                
            
            
            <li class="nav-item">
                <a class="nav-link" href="all_users.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>All Users</span></a> 
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="all_posts.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>All Posting</span></a>
            </li>
            <?php }?>
            
            
            <li class="nav-item">
                <a class="nav-link" href="your_posting.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Your Posting</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create_post.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Create Post</span></a>
            </li>
            
            </ul>