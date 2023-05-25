<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $training = $_POST['training'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $invitational = $_POST['invitational'];
    $organization = $_POST['organization'];
    $address = $_POST['address'];
    $speaker = $_POST['speaker'];
    $address1 = $_POST['address1'];
    $person = $_POST['person'];
    $num = $_POST['num'];

    $query = mysqli_query($conn, "INSERT INTO form_invitational (training, date, days, time, place, invitational, organization, address, speaker, address1, person, num)
    VALUES('$training', '$date', '$days', '$time', '$place', '$invitational', '$organization', '$address', '$speaker', '$address1', '$person', '$num')");

    if ($query) {
        echo '<script> alert("Data Saved"); </script>';
        echo "<script> document.location='invitational_form.php'</script>";
    } else {
        echo '<script> alert("Data not saved"); </script>';
    }
}
?>
