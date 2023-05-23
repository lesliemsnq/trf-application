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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  </head>
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

    <main class="main" style="height:1750px;">
    <section class="container">
      <header>HOLY ANGEL UNIVERSITY <br>
        Human Resources Management Office <br>
        Human Resource Development<br>
      </header>

      <form action="ol.php" class="form" method="POST">
        <!-- TITLE OF  THE ACTIVITY -->
        <div class="input-box">
          <label for="act">Title of Activity</label>
          <input type="text" id="act" name="act" required />
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

        <!-- TYPE OF ACTIVITY -->
        <div class="type_activity">
          <label for="activity">Type of Activity</label>
          <div>
            <label for="check-gen"><input type="radio" id="check-gen" name="tact" value="General Information"/> General Information</label><br>
            <label for="check-rel"><input type="radio" id="check-rel" name="tact" value="Related Webinar" /> Related Webinar</label><br>
            <label for="check-prof"><input type="radio" id="check-prof" name="tact"  value="Continue Professional Development"/> Continue Professional Development</label><br>
            <label for="check-cert"><input type="radio" id="check-cert" name="tact" value="Certificate Course" /> Certificate Course</label><br>
          </div>
        </div>
        <br>

        <!-- YES OR NO -->
        <div class="yn">
          <label for="yn">Are there applicable fees/payments for this activity as declared by organizer/provider?</label>
          <div>
            <label for="check-yes"><input type="radio" id="check-yes" name="ynoption" value="yes"/>Yes</label>
            <label for="check-no"><input type="radio" id="check-no" name="ynoption" value="no"/>No</label>
          </div>
        </div>
            

        <!-- NAME OF THE ACCREDITED PROFESSIONAL ORGANIZATION/PROVIDER -->
        <div class="input-box">
          <label for="name_acc">Name of Accredited Professional Organization/Provider</label>
          <input type="text" id= "nameacc" name="nameacc"required />
        </div>

        <!-- OFFICE ADDRESS -->
        <div class="input-box">
          <label for="offadd">Office Address</label>
          <input type="text" id="offadd" name="offadd"required />
        </div>

        <!-- CONTACT PERSON -->
        <div class="input-box">
          <label for="conper">Contact Person</label>
          <input type="text" id="person" name="person" required />
        </div>

        <!-- EMAIL -->
        <div class="input-box">
          <label for="email">Email</label>
          <input type="text"  id="email" name="email"required />
        </div>
        
        <!-- CONTACT NUMBER -->
        <div class="column">
          <div class="input-box">
            <label for ="num">Contact Number</label>
            <input type="text" id="num" name="num"required />
          </div>

        <!-- PERSON/SPEAKER/FACILITATOR -->
          <div class="input-box">
            <label for="psf">Resource Person/Speaker/Facilitator</label>
            <input type="text" id="psf" name="psf"required />
          </div>
        </div>

        <!-- MODE OF DELIVERY -->
        <div class="delivery-box">
          <label for="socmed">Mode of Delivery</label>
            <div>
              <label for="check-fb"><input type="radio" id="check-fb" name="socmed" value="Facebook Page" /> Facebook Page</label><br>
              <label for="check-fb"><input type="radio" id="check-yt" name="socmed" value="Youtube Link" /> Youtube Link</label><br>
              <label for="check-others"><input type="radio" id="check-others" name="socmed" value="Others" /> Other/s</label><br>
              
              
            </div>
          </div>
        </div>
        <a href="#"><button class="show-modal">Submit</button></a>
        <!-- <span class="overlay"></span> -->

        <div class="modal-box">
          <i class="fa-regular fa-circle-check"></i>
          <h2>Completed</h2>
        <h3>You have sucessfully submitted the information.</h3>
        <div class="buttons">
          <button class="close-btn">Ok, Close</button>
        </div>
      </form>
      </div>
     
    </main>

    <script src="script.js"></script>
    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    </script>
    <!-- <script>
    let modal-box = document.getElementById("modal-box");

    function openModelBox(){
      modal-box.classList.add("open-modal-box");
    }
    function closeModelBox(){
      modal-box.classList.remove("open-popup");
    }
  </script> -->
 
   
    
  </body>

  <!-- DATABASE MYPHPADMIN
  act
  date
  day 
  time  
  place   
  tact  
  ynoption
  nameacc
  offadd 
  person  
  email   
  num   
  psf   
  socmed -->
 
</html>