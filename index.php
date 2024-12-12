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
    <title>CMS System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);
body {
  background-image: url(img/homepage.jpg); 
  background-size:cover;
  background-repeat: no-repeat;
  background-position:center; 
  height: 100%;
  width: 100%; 
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
 
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color:#fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}
footer {
  background-color: #f8f9fa; /* Light background color */
  color: #6c757d; /* Muted text color */
  padding: 40px 0; /* Padding around the footer content */
}

footer h6 {
  font-weight: bold;
  color: #333; /* Darker heading color */
  margin-bottom: 20px; /* Spacing below headings */
}

footer p {
  margin: 0; /* Remove default margins for paragraphs */
  color: #6c757d; /* Muted text color for paragraphs */
}

footer a {
  color: #007bff; /* Link color */
  text-decoration: none; /* Remove underline */
  transition: color 0.3s; /* Smooth hover transition */
}

footer a:hover {
  color: #0056b3; /* Darker shade on hover */
}

footer i {
  margin-right: 10px; /* Spacing between icons and text */
  color: #333; /* Icon color */
}

footer .container {
  max-width: 1200px; /* Limit footer width */
  margin: 0 auto; /* Center the footer content */
}

footer .row {
  justify-content: center; /* Align columns in the center */
}

footer .col-md-3,
footer .col-md-2,
footer .col-md-4 {
  margin-bottom: 30px; /* Add spacing between columns */
}

footer .text-uppercase {
  letter-spacing: 1px; /* Slight spacing for uppercase headings */
}

footer .text-center {
  text-align: center; /* Center text for mobile devices */
}

footer .fw-bold {
  font-weight: 600; /* Slightly heavier font weight */
}

@media (max-width: 768px) {
  footer .text-md-start {
    text-align: center; /* Center text on smaller screens */
  }

  footer .mx-auto {
    margin: 0 auto 20px auto; /* Adjust spacing on smaller screens */
  }
}
/* General Navbar Styling */
.navbar {
  background-color: #f8f9fa; /* Light background */
  border-bottom: 2px solid #eaeaea; /* Subtle border at the bottom */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Soft shadow for a clean look */
  font-family: 'Arial', sans-serif; /* Font style */
}

.navbar-brand {
  font-size: 1.5rem; /* Slightly larger font size for brand name */
  font-weight: bold; /* Bold for emphasis */
  color: #333; /* Darker text color */
}

.navbar-brand:hover {
  color: #007bff; /* Brand color changes on hover */
  text-decoration: none; /* No underline */
}

.navbar-nav .nav-link {
  font-size: 1rem; /* Standard font size for links */
  font-weight: 500; /* Medium weight */
  color: #555; /* Neutral link color */
  padding: 8px 15px; /* Space around the links */
  transition: color 0.3s ease-in-out; /* Smooth color transition */
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
  color: #007bff; /* Highlight active/hovered links */
}

.navbar-toggler {
  border: none; /* Remove border around the toggler */
  color: #333; /* Icon color */
  font-size: 1.25rem; /* Larger toggler icon */
}

.navbar-toggler:focus {
  box-shadow: none; /* Remove focus outline */
}

.collapse.navbar-collapse {
  justify-content: flex-end; /* Align navigation items to the right */
}

/* Responsive Design Adjustments */
@media (max-width: 992px) {
  .navbar-nav {
    text-align: center; /* Center items on smaller screens */
    background-color: #f8f9fa; /* Maintain navbar background */
    padding: 10px 0; /* Add some padding */
  }

  .navbar-nav .nav-item {
    margin: 5px 0; /* Add spacing between items */
  }
}


</style>  
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="">AURA</a>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Dashboard/about_us.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Dashboard/contact_us.php">Contact us</a>
              </li>

              <?php
              if(isset($_SESSION['u_id'])){

              
              
              ?>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
          
            
              <li class="nav-item">
                <a class="nav-link" href="Dashboard/dashboard.php">Dashboard</a>
              </li>
                <?php }
                else {

                
                
                ?>

                <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php }?>
            </ul>
          </div>
        </div>
      </nav>
    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <h1 class="heading">
                    Heat News!! 
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                      <?php 
                        $query = "select * from al_post";
                        $objects = mysqli_query($con , $query);
                        while($row = mysqli_fetch_array($objects)){
                          
                          $p_id = $row['p_user'];
                          $user = "select * from al_user where u_id = $p_id";
                          $obj = mysqli_query($con , $user);
                          $user= mysqli_fetch_array($obj);

                      ?>
                       
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="#">
                                <img src="post/<?php echo $row['p_pic'];?>" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#"><?php echo substr($row['p_title'],0,20);?>
                                      </a>
                                    </h4>
                                    <p class="">
                                          <?php echo substr($row['p_description'] , 0 , 25);?>
                                        </p>
                                     <p class=""> Posted By: 
                                       <b> <?php echo $user['u_name'];?></b>
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="Dashboard/blog_single_post.php?post_id=<?php echo $row['p_id'];?>" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                   

                    </div>
                </div>
            </div>
        </div>
    </section>
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
            <i class="fas fa-gem me-3"></i>Aura.com
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
            Grossing Animes
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
            Manga links
          </h6>
          <p>
            <a href="https://mangafire.to/" target="_blank" class="text-reset">Mangafire</a>
          </p>
          <p>
            <a href="https://mangaplus.shueisha.co.jp/updates" target="_blank" class="text-reset">Mangaplus</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Maharashtra,Mumbai-400008,India</p>
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

