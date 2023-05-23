<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<!-- YouTube or Website - CodingLab -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <link rel="stylesheet" href="acc-user.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">TRF</a>

      <div class="menu-content">
        <ul class="menu-items">

          <!-- START OF THE FORM MENU ITEM -->
          <div class="menu-title">Forms</div>

          <li class="item">
            <a href="form-ol.php">Online Form</a>
          </li>
          <li class="item">
            <a href="form-ftf.php">Face-to-Face Form</a>
          </li>
          <li class="item">
            <a href="inhouse-form.php">In-House Form</a>
          </li>
          <li class="item">
            <a href="invitational-form.php">Invitational Form</a>
          </li>
          <!-- END OF THE FORM MENU -->


          <!-- START OF THE REPORT & EVALUATION MENU ITEM -->
          <div class="menu-title">Report & Evaluation</div>
          <div class="menu-title">Individual Report</div>
          
          <li class="item">
            <a href="#">Online</a>
          </li>
          <li class="item">
            <a href="#">Face-to-Face</a>
          </li>
          <!-- END OF THE REPORT & EVALUATION MENU -->



          <!-- START OF THE PERSONAL MENU -->
          <div class="menu-title">Menu</div>

          <li class="item">
            <a href="#">Edit Profile</a>
          </li>

          <li class="item">
            <a href="#">Messages</a>
          </li>

          <li class="item">
            <a href="logout.php">Log-Out</a>
          </li>
        </ul>
        <!-- END OF THE PERSONAL MENU -->
     </div>
    </nav>



  <?php  if (isset($_SESSION['username'])) : ?>
   <!-- START OF THE NAVBAR -->
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i> 
      
      <span class="navbar-text">
    	    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
          <?php endif ?>
      </span>
      <!-- <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </nav>
    <!-- END OF NAVBAR -->
    

    <main class="main">
     
    </main>

    <script src="script.js"></script>
  </body>
</html>
