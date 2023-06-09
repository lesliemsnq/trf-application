<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $attendee = $_POST['attendee'];
    $dept = $_POST['dept'];
    $training = $_POST['training'];
    $place_date = $_POST['place_date'];
    $org = $_POST['org'];
    $topics = $_POST['topics'];
    


    $insert_query = mysqli_query($conn, "INSERT INTO report_ol(attendee, dept, training, place_date, org, topics) 
    VALUES('$attendee', '$dept', '$training', '$place_date', '$org', '$topics'')");

    if($insert_query) {
        echo "<script> alert('Record Successfully!')</script>";
        echo "<script> document.location='ftf-report.php'</script>";
    }
    else{
        echo "<script> alert('Try Again!')</script>";
    }
}

?>

<!-- UPLOADING FILES -->
<?php
if(isset($_POST['upload'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('docx', 'doc', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'. $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ftf-report.php?uploadsuccess");
            }else{
                echo "Your file is too big!";
            }

        } else{
            echo "There was an error uploading your file!";
        }

    }else{
        echo "You cannot upload files of this type!";
    }
}


?>
