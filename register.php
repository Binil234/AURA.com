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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .register{
            margin: auto;
            width: 50%;
            margin-top: 20px;
        }
        body {
            margin: 0;
            padding: 0;
            background: url(img/register.jpg) no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row register">
            <div class="col-12">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">User Registeration</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="u_name" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="u_email" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="u_pass" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="file" name="u_pic" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="u_dob" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="u_country" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="u_city" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" name="u_mobile" value="" class="form-control" >
                        </div>
                        <label>Bio</label>
                        <div class="form-group">
                            <textarea name="u_bio" id="" cols="64" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="register" class="btn btn-success" value="Register">
                    </div>
                </form>  
    
    <?php
        if(isset($_POST['register'])){
            $u_name = $_POST['u_name'];
            $u_email = $_POST['u_email'];
            $u_pass = ($_POST['u_pass']);
            $u_pic = $_FILES['u_pic']['name'];
            $u_pic_temp = $_FILES['u_pic']['tmp_name'];
            $u_dob = $_POST['u_dob'];
            $u_country = mysqli_real_escape_string($con, $_POST['u_country']);
            $u_city = $_POST['u_city'];
            $u_mobile = $_POST['u_mobile'];
            $u_bio = $_POST['u_bio'];

            move_uploaded_file($u_pic_temp,"img/$u_pic");
            $query = "INSERT INTO al_user(u_name,u_email,u_pass,u_pic,u_dob,u_country,u_city,u_mobile,u_bio) values('$u_name','$u_email','$u_pass','$u_pic','$u_dob','$u_country','$u_city','$u_mobile','$u_bio')";

            if(mysqli_query($con,$query)){
                echo "<script>window.open('login.php','_self')</script>";
            }


        }
    ?>

            </div>

        </div>
       
    
</div>
</body>
</html>