<?php 
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

    $conn = new mysqli ('localhost','root','','project');
    if ($conn->connect_error){
        die('Connection Failed  :' .$conn->connect_error);
    }else{
        $stmt = $conn ->prepare("insert into form_inhouse(training, date, days, time, place, inhouse, department, speaker, venue, time1, person)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt ->bind_param("ssissssssss",$training, $date, $days, $time, $place, $inhouse, $department, $speaker, $venue, $time1, $person);
        $stmt ->execute();
        echo "registration Sucessfully...";
        $stmt ->close();
        $conn ->close();
    }
    


    




?>