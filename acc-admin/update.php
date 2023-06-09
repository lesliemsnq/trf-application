<?php
include 'config-admin.php';

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:reg-user.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>