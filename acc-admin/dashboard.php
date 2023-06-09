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
    <title>Dashboard</title>
    <link rel="stylesheet" href="acc-admin.css" />
    <link rel="stylesheet" href="dashboard.css" />

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <nav class="sidebar">
	<a href="#" class="logo"><img src="../trf_logo.png" style="position: absolute; top: 20px; left: 70px; height: 30px"></a>

      <div class="menu-content">
      
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
      
      <span class="navbar-text">
    	    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
          <?php endif ?>
      </span>
    </nav>

    <!-- START OF DASHBOARD - ADMIN ACCOUNT -->
    <main class="main">

    <!-- REGISTERED USERS -->
    <ul class="box-info">
				<li>
          <i class='bx bxs-group' ></i>
					<span class="text">
          <?php
            require 'config-admin.php';
            $query = "SELECT id FROM users ORDER BY id";
            $query_run = mysqli_query($conn, $query);
            $row = mysqli_num_rows($query_run);

            echo '<h3>' .$row. '</h3>';
          ?>
						<p>Total Registered Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user' ></i>
					<span class="text">
          <?php
            require 'config-admin.php';
            $query = "SELECT id FROM admins ORDER BY id";
            $query_run = mysqli_query($conn, $query);
            $row = mysqli_num_rows($query_run);

            echo '<h3>' .$row. '</h3>';
          ?>
						<p>Total Registered Admins</p>
					</span>
				</li>
				<li>
        <i class='bx bxs-x-circle'></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Declined Forms</p>
					</span>
				</li>
        <li>
          <i class='bx bxs-check-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Approved Forms</p>
					</span>
				</li>
    </ul>

    <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Fill-Up Forms</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Filled-Up</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
		
    </main>
    <!-- END OF DASHBOARD - ADMIN ACCOUNT -->

  <script src="script-admin.js"></script>
  </body>
</html>
