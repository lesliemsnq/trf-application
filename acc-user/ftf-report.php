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
    <title>Face-To-Face Report</title>
    <link rel="stylesheet" href="report.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
    <a href="#" class="logo"><img src="../trf_logo.png" style="position: absolute; top: 20px; left: 70px; height: 30px"></a>

      <div class="menu-content">
        <ul class="menu-items">
        <li class="item">
            <a href="acc-user.php">Dashboard</a>
          </li>

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
          
          <li class="item">
            <a href="online-report.php">Online</a>
          </li>
          <li class="item">
            <a href="ftf-report.php">Face-to-Face</a>
          </li>
          <!-- END OF THE REPORT & EVALUATION MENU -->



          <!-- START OF THE PERSONAL MENU -->
          <div class="menu-title">Menu</div>


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
      
      <span class="navbar-text" style=" position: absolute;top: 15px; right: 16px;">
    	    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
          <?php endif ?>
      </span>
    </nav>
    <!-- END OF NAVBAR -->
    

    <main class="main" style="height: 1930px;">
    <section class="container">
      <header>Individual Training Report</header>

      <form action="report-ftf.php" class="form" method="POST"enctype="multipart/form-data">

        <!-- REPORT HEADLINE -->
        <h4>Report Headline</h4>
        <div class="input-box">
          <label for="attendee">Name of Attendee</label>
          <input type="text" id="attendee" name="attendee" required />
        </div>
        <div class="input-box">
          <label for="dept">Department & Designation</label>
          <input type="text" id="dept" name="dept" required />
        </div>
        <div class="input-box">
          <label for="training">Title of Training Attended</label>
          <input type="text" id="training" name="training" required />
        </div>
        <div class="input-box">
          <label for="place_date">Training Place  & Date/s</label>
          <input type="text" id="place_date" name="place_date" required />
        </div>
        <div class="input-box">
          <label for="org">Inviting Organization</label>
          <input type="text" id="org" name="org" required />
        </div>
        <div class="input-box">
          <label for="topics">Major topics discussed during the seminar/training</label>
          <br>
          <textarea id="topics" name="topics" style="width:100%;" required ></textarea>
        </div>
        <!-- END OF REPORT HEADLINE -->
        <br>
        
        <!-- REPORT CONTENT -->
        <h4>Report Content</h4>
        <h5> Font: Aerial or Times New Roman <br> Font-Size: 12 <br>Spacing: 1.5 </h5>
        <br>
        <p><b>1.</b> Overall, did you find the training relevant to your work? Why or why not?</p>
        <p><b>2.</b> What are the three most important things you have learned from the training?</p>
        <p><b>3.</b> How relevant are the topics discussed to your: <br> a. Present work? <br> b. Professional growth? <br>c. Personal growth? </p>
        <p><b>4.</b> How are you going to use the knowledge and/or skills learned? Pls. provide details/plan.</p>
        <p><b>5.</b> How are you going to share the knowledge /skills to your peers/colleagues? Pls. provide details. / will conduct an echo seminar to my fellow faculty/staff on:</p>
        <p><b>6.</b> What aspects and insights have you discovered that can be practically adopted by Holy Angel University?</p>
        <p><b>7.</b> For networking purposes, please submit the names of resource persons and professionals you have net using the following format.</p>
        <br>
        <div class="upload">
            <input type="file" name="file">
        </div>
        
        <!-- END OF REPORT CONTENT-->
        <br>

        <h4> Upload/Attach the following below.</h4>
        <br>
        <!-- UPLOADING FILES -->
        <p>Seminar Materials(CDs, Books, Handouts, etc.)</p>
        <br>
        <div class="upload">
            <input type="file" name="file">
        </div>
        
        <br>
        <p><b>Proof of Attendance:</b></p>
        <p><b>a.</b> Photocopy of Certificate of Attendance <br>
        <b>b.</b> Certificate of Apperance <br>
        <b>c.</b> Seminar Photos<br>
        <b>d.</b> Other/s</p>
        <br>
        <div class="upload">
            <input type="file" name="file">
        </div>
        
            
        
        <!-- END OF UPLOADING FILES -->



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
