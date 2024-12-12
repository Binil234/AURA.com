<?php
   session_start();
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
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url(img/background.png) no-repeat center center/cover;
            backdrop-filter: blur(8px);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h1 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .login-container input {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }
        .login-container input:focus {
            border-color: #6a5acd;
        }
        .login-container button {
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #6a5acd, #8a2be2);
            color: white;
            font-size: 1rem;
            cursor: pointer;
            
        }
        .login-container button:hover {
            background: linear-gradient(90deg, #8a2be2, #6a5acd);
        }
        .login-container a {
            color: #6a5acd;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .logo {
            margin-bottom: 1rem;
        }
        .logo img {
            width: 80px;
            height: auto;
        }
    </style>
    
</head>
<body>
    <div class="container my-5">
        <div class="row login">
            <div class="col-12">
                <form method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" name="u_email" id="form2Example1" class="form-control" />
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="u_pass" id="form2Example2" class="form-control" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="register.php">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4">
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="register.php">Register</a></p>
                      
                    </div>
                  </form>

    <?php
        if(isset($_POST['login'])){
            $u_email = $_POST['u_email'];
            $u_pass = $_POST['u_pass'];
            $query = "select * from al_user where u_email = '$u_email'and u_pass = '$u_pass'";
            $user_obj = mysqli_query($con , $query);
            $row = mysqli_fetch_array($user_obj);
            $id = $row['u_id'];
            $num_of_obj = mysqli_num_rows($user_obj);
            if($num_of_obj == 1){
                $_SESSION['u_id'] = $id;
                echo "<script>window.open('index.php','_self');</script>";
            }
            else{
                echo "<script>alert('Your email and password are incorrect, try again later')</script>";
            }
        }

    ?>
            </div>
        </div>
      
</div>
</body>
</html>