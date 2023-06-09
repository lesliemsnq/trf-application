<?php
if (isset($_GET['id'])) {
include("config-admin.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    // $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:reg-user.php");
}else{
    die("Something went wrong");
}
}else{
    echo "User does not exist";
}
?>

<?php
if (isset($_GET['id'])) {
    include("config-admin.php");
    $id = $_GET['id'];
    
    // Check if the admin with the given id exists
    $checkQuery = "SELECT * FROM admins WHERE id='$id'";
    $result = mysqli_query($conn, $checkQuery);
    if(mysqli_num_rows($result) > 0) {
        // Admin exists, proceed with deletion
        $deleteQuery = "DELETE FROM admins WHERE id='$id'";
        if(mysqli_query($conn, $deleteQuery)){
            session_start();
            // $_SESSION["delete"] = "Admin Deleted Successfully!";
            header("Location: list-admin.php");
            exit();
        } else {
            die("Something went wrong");
        }
    } else {
        echo "Admin does not exist";
    }
} else {
    echo "Invalid request";
}
?>
