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
    <link rel="stylesheet" href="acc-admin/style-admin.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">TRF</a>

      <div class="menu-content">
        <div class="name">
          <?php  if (isset($_SESSION['username'])) : ?>
    	     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <?php endif ?>
        </div>
      
        <ul class="menu-items">
          <div class="menu-title">Admin-Menu</div>

          <li class="item">
            <a href="#">Dashboard</a>
          </li>
          <li class="item">
            <a href="#">Registered Users</a>
          </li>
          <li class="item">
            <a href="#">List of Forms</a>
          </li>
          <li class="item">
            <a href="#">Reports & Evaluation</a>
          </li>

          <div class="menu-title">Admin-Personal Menu</div>
          <li class="item">
            <a href="#">List of Admins</a>
          </li>
          <li class="item">
            <a href="#">Create Admin</a>
          </li>
          <li class="item">
            <a href="#">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>

    <main class="main">
     
    </main>

    <script src="script.js"></script>
  </body>
</html>
