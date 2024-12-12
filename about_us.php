<?php
// Start the session if needed
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Aura.com</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
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
        }
        .container {
            max-width: 900px;
            margin: 3rem auto;
            background: #fff;
            padding: 2rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
        }
        h1, h2 {
            color: #444;
            text-align: center;
        }
        p {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
        }
        ul {
            margin: 1.5rem 0;
            padding: 0;
            list-style: none;
        }
        ul li {
            background: #f9f9f9;
            margin: 0.5rem 0;
            padding: 0.8rem 1rem;
            border-left: 4px solid #feb47b;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
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
    <h1>Welcome to Aura.com</h1>
</header>

<div class="container">
    <h2>About Us</h2>
    <p>At <strong>Aura.com</strong>, we are passionate about the vibrant world of anime and the electrifying thrill of hardcore fights. Our platform is dedicated to bringing you the latest news on new anime releases, from the much-anticipated blockbusters to hidden gems in the anime universe.</p>
    
    <p>We are also your ultimate destination for updates on upcoming hardcore fights. Whether it’s iconic battles in anime, the best moments from the action genre, or insights into the combat dynamics of your favorite characters, we’ve got you covered!</p>

    <p>Our mission is to create a hub for anime enthusiasts and action lovers to stay updated, share their passion, and celebrate the art of storytelling through action and adventure.</p>

    <h2>Why Choose Aura.com?</h2>
    <ul>
        <li><strong>Timely Updates:</strong> Stay ahead with real-time news on new anime launches and upcoming fight scenes.</li>
        <li><strong>Comprehensive Coverage:</strong> We delve into the details to bring you in-depth insights and sneak peeks.</li>
        <li><strong>Community-Driven:</strong> Join a growing community of anime and fight fans who share your passion.</li>
    </ul>

    <p>Thank you for choosing Aura.com as your trusted source for all things anime and hardcore action. Let’s embark on this exciting journey together!</p>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Aura.com. All rights reserved.</p>
</footer>

</body>
</html>
