<?php 

include 'config.php';
if (isset($_POST['submit'])){
    $training = $_POST['training'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $inhouse = $_POST['inhouse'];
    $department = $_POST['department'];
    $speaker = $_POST['speaker'];
    $venue = $_POST['venue'];
    $time1 = $_POST['time1'];
    $person = $_POST['person'];

    $query = mysqli_query($conn, "INSERT INTO form_inhouse(training, date, days, time, place, inhouse, department, speaker, venue, time1, person)
    VALUES('$training', '$date', '$days', '$time', '$place', '$inhouse', '$department', '$speaker', '$venue', '$time1', '$person')");

    if ($query) {
        echo '<script> alert("Data Saved"); </script>';
        echo "<script> document.location='inhouse_form.php'</script>";
    
    }else {
        echo '<script> alert("Data not saved"); </script>';
    }
}
?>
