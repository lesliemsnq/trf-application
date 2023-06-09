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
<?php
session_start();
include 'config-admin.php';
if (isset($_SESSION['username'])) {
  // Fetch data from the database and assign it to $row variable
  $query = "SELECT * FROM users WHERE id = '" . $row['id'] . "'";
  $edit = mysqli_query($conn, $query);
  $erow = mysqli_fetch_array($edit);
?>
<nav class="sidebar">
  <a href="#" class="logo"><img src="../trf_logo.png" style="position: absolute; top: 20px; left: 70px; height: 30px" /></a>
  <div class="menu-content">
    <br />
    <br />

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

<!-- START OF THE NAVBAR -->
<nav class="navbar">
  <i class="fa-solid fa-bars" id="sidebar-close"></i>
  <span class="navbar-text" style="position: absolute; top: 15px; right: 16px;">
    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
  </span>
</nav>

<!-- START OF CREATE ADMIN PAGE-->
<main class="main">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <center>
      <h4 class="modal-title" id="myModalLabel">Edit</h4>
    </center>
  </div>
  <div class="modal-body">
    <div class="container-fluid">
      <form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
        <div class="row">
          <div class="col-lg-2">
            <label style="position:relative; top:7px;">Username</label>
          </div>
          <div class="col-lg-10">
            <input type="text" name="username" class="form-control" value="<?php echo $erow['username']; ?>" />
          </div>
        </div>
        <div style="height:10px;"></div>
        <div class="row">
          <div class="col-lg-2">
            <label style="position:relative; top:7px;">Email</label>
          </div>
          <div class="col-lg-10">
            <input type="text" name="email" class="form-control" value="<?php echo $erow['email']; ?>" />
          </div>
        </div>
        <div style="height:10px;"></div>
        <div class="row">
          <div class="col-lg-2">
            <label style="position:relative; top:7px;">Password</label>
          </div>
          <div class="col-lg-10">
            <input type="text" name="password" class="form-control" value="<?php echo $erow['password']; ?>" />
          </div>
        </div>
        </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
  </div>
  </form>
</main>
<!-- END OF CREATE ADMIN PAGE-->

<script src="script-admin.js"></script>

</body>
</html>
<?php
} else {
  // Handle the case where the session username is not set
  // Redirect the user or show an error message
}
?>
