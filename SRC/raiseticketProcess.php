<?php
include 'config.php';

session_start();

if (!isset($_SESSION['student'])) {
    header('location: login.php');
    exit();
}

$S_ID = $_POST["S_ID"];
$S_Name = $_POST['S_Name'];
$email = $_POST['email'];
$faculties = $_POST['faculties'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$sql = "INSERT INTO tickets (user_id, S_ID, S_Name, email, faculties, phone, subject, msg) 
        VALUES ('".$_SESSION['student']['ID']."', '$S_ID', '$S_Name', '$email', '$faculties', '$phone', '$subject', '$msg')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Ticket raised successfully')</script>";
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}

mysqli_close($conn);
