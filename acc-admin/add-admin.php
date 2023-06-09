<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login-admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login-admin.php");
  }
?>
<!DOCTYPE html>
<!-- YouTube or Website - CodingLab -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Admin</title>
    <link rel="stylesheet" href="acc-admin.css" />
  
    
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
    <a href="#" class="logo"><img src="../trf_logo.png" style="position: absolute; top: 20px; left: 70px; height: 30px"></a>
      <div class="menu-content">
        <br>
        <br>
      
        <ul class="menu-items">
          <div class="menu-title">Admin-Menu</div>

          <li class="item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="item">
            <a href="reg-user.php">Registered Users</a>
          </li>
          <li class="item">
            <a href="#">List of Forms</a>
          </li>
          <li class="item">
            <a href="#">Reports & Evaluation</a>
          </li>

          <div class="menu-title">Admin-Personal Menu</div>
          <li class="item">
            <a href="list-admin.php">List of Admins</a>
          </li>
          <li class="item">
            <a href="add-admin.php">Create Admin</a>
          </li>
          <li class="item">
            <a href="logout-admin.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php  if (isset($_SESSION['username'])) : ?>
   <!-- START OF THE NAVBAR -->
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i> 
      
      <span class="navbar-text" style=" position: absolute;top: 15px; right: 16px;">
    	    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
          <?php endif ?>
      </span>
    </nav>



    <!-- START OF CREATE ADMIN PAGE-->
    <main class="main">
      <section class="container">
        <div class="header">
          <h2>Create Admin</h2>
        </div>
        <form method="POST" action="create-admin.php">
          <div class="input-box">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="input-box">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
          </div>
          <div class="input-box">
          <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          <div>

          <button type="submit" name="submit">Add Admin</button>
      </section>
        </form>
      
    </main>
    <!-- END OF CREATE ADMIN PAGE-->

    <script src="script-admin.js"></script>

    
    
      
    
  </body>
</html>
