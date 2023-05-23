<?php include('server-admin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LogIn</title>
  <link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
  <div class="header">
  	<h2>Login as Admin</h2>
  </div>
  <form method="post" action="login-admin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register-admin.php">Sign up</a>
  	</p>
  </form>
</body>
</html>