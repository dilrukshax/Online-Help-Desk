<?php
include 'config.php';

$answers = $_POST["answer"];
$T_id = $_POST["T_id"];


// Process each answer
$sql = "UPDATE tickets SET answer = '$answers' , status = '2' WHERE T_id = '$T_id'";
//UPDATE tickets SET answer = 'answers' WHERE T_id = 6;



if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Answer submitted successfully')</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}


mysqli_close($conn);

header("Location: ticketview.php");
exit;
