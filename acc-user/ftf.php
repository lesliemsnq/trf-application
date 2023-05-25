<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $training = $_POST['training'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $tact= $_POST['tact'];


    $query = mysqli_query($conn, "INSERT INTO form_ftf(training, date, days, time, place, tact)
    VALUES('$training', '$date', '$days', '$time', '$place', '$tact')");

    if($query){
        echo '<script> alert("Data Saved"); </script>';
        echo "<script> document.location='form_ftf.php'</script>";
    }else {
        echo '<script> alert("Data not saved"); </script>';
    }

}

?>
