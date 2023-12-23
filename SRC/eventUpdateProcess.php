<?php
include 'config.php';

$eventName = $_POST["eventName"];
$date = $_POST['date'];
$details = $_POST['details'];


$sql = "INSERT INTO eventupdate (e_id, eventName, date, details) 
        VALUES ('', '$eventName', '$date', '$details')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('event rajistation successfully')</script>";
    header("Location: eventUpdateadmin.php");
    exit;
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}

mysqli_close($conn);
