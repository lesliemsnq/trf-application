<?php
	include('config-admin.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	mysqli_query($conn,"UPDATE users SET username='$username', email='$email', password='$password' where id='$id'");
	header('location:reg-user.php');

?>