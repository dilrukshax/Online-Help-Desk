<?php
include 'config.php';

$e_id = $_POST["e_id"];


// Process each answer
$sql = "UPDATE eventupdate SET status = '2'  WHERE e_id = '$e_id'";
//UPDATE tickets SET answer = 'answers' WHERE T_id = 6;



if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Answer submitted successfully')</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}


mysqli_close($conn);

header("Location: eventUpdateadmin.php");
exit;
