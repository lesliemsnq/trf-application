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
    </nav>
    <!-- END OF NAVBAR -->
    

    <main class="main" style="height:1605px;">
    <section class="container">
      <header>HOLY ANGEL UNIVERSITY <br>
        Human Resources Management Office <br>
        Human Resource Development<br>
      </header>

      <form action="invitational.php" class="form" method="POST">
        <!-- TITLE OF  THE ACTIVITY -->
        <div class="input-box">
          <label for="training">Title of Training</label>
          <input type="text" id="training" name="training" required />
        </div>
        
        <!-- DATE -->
        <div class="input-box">
          <label for="date">Date/s</label>
          <input type="date" id="date" name="date" required />
        </div>

        <!-- NO. OF DAYS -->
        <div class="input-box">
          <label for="days">No. of day/s</label>
          <input type="number" id="days" name="days" required />
        </div>

        <!-- TIME -->
        <div class="input-box">
          <label for="time">Time</label>
          <input type="text" id="time" name="time" required />
        </div>

        <!-- PLACE -->
        <div class="input-box">
          <label for="place">Place</label>
          <input type="text" id="place" name="place" required />
        </div>
        <br>

        <!-- TYPE OF ACTIVITY -->
        <div class="activity">
          <label for="activity">For Invitational</label>
          <br>
          <input type="radio" id="invitational" name="invitational" value="invitational" checked>
          <label for="invitational">Invitational</label>
        </div>


        <!-- INVITING ORGANIZATION -->
        <div class="input-box">
          <label for="organization">Name of Inviting Organization</label>
          <input type="text" id="organization" name="organization" required />
        </div>

        <!-- ADDRESS -->
        <div class="input-box">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" required />
        </div>

        <!-- RESOURCE SPEAKER -->
        <div class="input-box">
          <label for="speaker">Resource Speaker</label>
          <input type="text" id="speaker" name="speaker" required />
        </div>

        <!-- ADDRESS -->
        <div class="input-box">
          <label for="address1">Address</label>
          <input type="text" id="address1" name="address1" required />
        </div>

        <!-- CONTACT PERSON -->
        <div class="input-box">
          <label for="person">Contact Person</label>
          <input type="text" id="person" name="person" required />
        </div>

         <!-- TEL NUMBER -->
        <div class="input-box">
          <label for="num">Tel Nos.</label>
          <input type="text" id="num" name="num" required />
        </div>

    

        <div class="submit">
          <button type="submit" class="show-modal" name="submit">Submit</button>
        </div>
        <span class="overlay"></span>


        <script src="script.js"></script>
      </form>

    </div>
     
    </main>

    <script src="script.js"></script>
  </body>
</html>
