<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $act = $_POST['act'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $tact = $_POST['tact'];
    $ynoption= $_POST['ynoption'];
    $nameacc = $_POST['nameacc'];
    $offadd = $_POST['offadd'];
    $person= $_POST['person'];
    $email= $_POST['email'];
    $num= $_POST['num'];
    $psf= $_POST['psf'];
    $socmed= $_POST['socmed'];


    $insert_query = mysqli_query($connection, "INSERT INTO form_ol(act, date, days, time, place, tact, ynoption, nameacc, offadd, person, email, num, psf, socmed) 
    VALUES('$act', '$date', '$days', '$time', '$place', '$tact', '$ynoption', '$nameacc', '$offadd', '$person', '$email', '$email', '$num', '$psf', '$socmed')");

    if($insert_query) {
        echo "<script> alert('Record Successfully!')</script>";
        echo "<script> document.location='form_ol.php'</script>";
    }
    else{
        echo "<script> alert('Try Again!')</script>";
    }
}

?>

CONNECT FOR OL FORM