<?php
session_start();
include('config-admin.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the username already exists
    $sql = "SELECT * FROM admins WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Username already exists, show error message
        $error = "Username already exists";
    } else {
        // Insert the new admin record into the database without hashing the password
        $sql = "INSERT INTO admins (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            // Registration successful, redirect to admin page or show success message
            echo "<script> alert('Record Successfully!')</script>";
            echo "<script> document.location='add-admin.php'</script>";
        } else {
            // Error occurred during registration, show error message
            $error = "Registration failed";
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
