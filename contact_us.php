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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Aura.com</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right,rgb(236, 211, 237),rgb(239, 186, 210));
            color: #333;
        }
        header {
            background: #222;
            color: #fff;
            padding: 1.5rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 2.5rem;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
        }
        h2 {
            color: #444;
            text-align: center;
            font-size: 2rem;
        }
        p {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
        }
        .contact-info {
            margin: 1.5rem 0;
            text-align: center;
        }
        .contact-info div {
            margin: 1rem 0;
            font-size: 1.2rem;
            color: #222;
            background:rgb(251, 249, 249);
            padding: 1rem;
            border: 2px solid rgb(228, 255, 159);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1.5rem;
            background: #222;
            color: #fff;
            font-size: 0.9rem;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Contact Us - Aura.com</h1>
</header>

<div class="container">
    <h2>Get in Touch</h2>
    <p>We'd love to hear from you! If you have any questions, suggestions, or feedback, feel free to reach out to us through the contact details below.</p>

    <div class="contact-info">
        <div>
            <strong>Email:</strong> biniljohn234@gmail.com
        </div>
        <div>
            <strong>Contact Numbers:</strong><br>
            +91 7777-024-703<br>
            +91 8822-800-620
        </div>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Aura.com. All rights reserved.</p>
</footer>

</body>
</html>