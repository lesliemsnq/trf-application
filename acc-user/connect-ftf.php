<?php 
    $act = $_POST['act'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $activity = $_POST['activity'];
    $ynoption = $_POST['ynoption'];
    $nameacc = $_POST['nameacc'];
    $offadd = $_POST['offadd'];
    $person= $_POST['person'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $psf = $_POST['psf'];
    $socmed = $_POST['socmed'];

    $conn = new mysqli ('localhost','root','','project');
    if ($conn->connect_error){
        die('Connection Failed  :' .$conn->connect_error);
    }else{
        $stmt = $conn ->prepare("insert into form_ol(act, date, days, time, place, activity, ynoption, nameacc, offadd, person, email, num, psf, socmed)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt ->bind_param("ssissssssssiss",$training, $date, $days, $time, $place, $activity, $ynoption, $nameacc, $offadd, $person, $email, $num, $psf, $socmed);
        $stmt ->execute();
        echo "registration Sucessfully...";
        $stmt ->close();
        $conn ->close();
    }

?>