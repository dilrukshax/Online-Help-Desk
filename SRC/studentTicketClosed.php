<?php

include 'config.php';

session_start();

if (!isset($_SESSION['student'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>University Support Portal</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php
    require "header.php";
    ?>

    <div style="min-height: 600px; margin-top: 100px;">
    <h1 style="margin-top: 100px; font-size: 30px;"> Closed Tickets </h1>
        <?php


        // Retrieve tickets data from the database $_SESSION['student_name']['S_ID'] 
        $sql = "SELECT * FROM tickets WHERE status = '2'  AND `user_id`='" . $_SESSION['student']['ID'] . "' ";
        $result = mysqli_query($conn, $sql);

        // Check if there are any tickets
        if (mysqli_num_rows($result) > 0) {
            echo "<table style='border: 1px solid black' >";
            echo "<tr><th>Student id</th><th>Student Name</th><th>email</th><th>faculties</th><th>phone</th><th>subject</th><th>msg</th><th>answer</th></tr>";

            // Loop through each ticket
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['S_ID'] . "</td>";
                echo "<td>" . $row['S_Name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['faculties'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['msg'] . "</td>";
                echo "<td>" . $row['answer'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<h1 style='margin-top: 100px; font-size: 30px;'> No Tickets Found </h1>";
        }

        mysqli_close($conn);
        ?>

    </div>
    <?php
    require "footer.php";
    ?>

</body>

</html>