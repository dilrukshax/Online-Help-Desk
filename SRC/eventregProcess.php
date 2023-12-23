<?php
include 'config.php';

$FirstName = $_POST["FirstName"];
$email = $_POST['email'];
$NIC = $_POST['NIC'];
$addres = $_POST['addres'];
$phone = $_POST['phone'];
$e_id = $_POST['e_id'];

$sql = "INSERT INTO event ( FirstName, email, NIC, addres, phone,event_id) 
        VALUES ( '$FirstName', '$email', '$NIC', '$addres', '$phone', '$e_id')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('event rajistation successfully')</script>";
    header("Location: index.html");
    exit;
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}

mysqli_close($conn);
