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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Single Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

body {
  font-family: 'Roboto', sans-serif;
  background-color: #e9ecef;
  color: #333;
  margin: 0;
  padding: 0;
}

.container {
  margin-top: 50px;
  max-width: 800px;
  background: #ffffff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  padding: 20px;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 700;
  color: #222;
}

p {
  line-height: 1.6;
  margin-bottom: 15px;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.post-title {
  font-size: 2rem;
  margin-bottom: 20px;
  text-align: center;
}

.post-meta {
  font-size: 0.9rem;
  color: #888;
  margin-bottom: 20px;
  text-align: center;
}

.post-content {
  margin-bottom: 30px;
}

footer {
  text-align: center;
  margin-top: 30px;
  padding-top: 20px;
  border-top: 1px solid #ddd;
  font-size: 0.9rem;
  color: #666;
}

footer a {
  color: #007bff;
  text-decoration: none;
}

footer a:hover {
  text-decoration: underline;
}
</style>  
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AURA</a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact us</a>
              </li>
              <?php
              if(isset($_SESSION['u_id'])){

              ?>
           
              
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
              </li>
              <?php }
              else {
              
              ?>

           
                <li class="nav-item">
                <a class="nav-link" href="../register.php">Register</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="../login.php">Login</a>
                </li>
                <?php }?>
              

            </ul>
          </div>
        </div>
      </nav>
   
      <div class="container">
        
      <?php
// Check if post_id is set and validate it
if (isset($_GET['post_id']) && is_numeric($_GET['post_id'])) {
    $p_id = intval($_GET['post_id']); // Sanitize input

    // Query to fetch post details
    $query = "SELECT * FROM al_post WHERE p_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $p_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the post exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Assign post details
        $p_id = $row['p_id'];
        $p_title = $row['p_title'];
        $p_description = $row['p_description'];
        $p_content = $row['p_content'];
        $p_pic = $row['p_pic'];
        $p_date = $row['p_date'];
        $p_user = $row['p_user'];

        // Query to fetch user details
        // Fetch user details 
        $user_query = "SELECT u_name FROM al_user WHERE u_id = ?";
        $user_stmt = $con->prepare($user_query);
        $user_stmt->bind_param("i", $p_user);
        $user_stmt->execute();
        $user_result = $user_stmt->get_result();

        if ($user_result->num_rows > 0) {
            $row = $user_result->fetch_assoc();
            
        }


        // Check if the user exists
        if ($user_result->num_rows > 0) {
            $user_row = $user_result->fetch_assoc();
            // You can access user details using $user_row['column_name']
        } else {
            echo "User not found.";
        }
    } else {
        echo "Post not found.";
    }
} else {
    echo "Invalid post ID.";
}
?>

    
        

        <h1><?php echo $p_title ;?></h1>

        <p>Published by: <b><?php echo htmlspecialchars($row['u_name']); ?></b></p> on <b><?php echo $p_date ; ?></b></p>
        <h4>Post Description</h4>
        <p>
        <?php echo $p_description; ?>
        </p>
        <img src="../post/<?php echo $p_pic; ?>" width="200" height="200" alt="">
        <p>
          <?php echo $p_content; ?>
        </p>
        
      </div>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">



  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <i class="fas fa-gem me-3"></i>AURA.com
          </h6>
          <p>
          Aura is an anime news platform where you will get the latest information on fights and upcoming anime series.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">One Piece</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Bleach</a>
          </p>
          <p>
            <a href="#!" class="text-reset">BlueLock</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Naruto</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Mumbai,Mumbai-400008,India</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            biniljohn234@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +91 7777-024-703</p>
          <p><i class="fas fa-print me-3"></i> +91 8822-800-620</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
