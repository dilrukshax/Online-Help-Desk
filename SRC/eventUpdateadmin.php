<?php

include 'config.php';

session_start();

if (!isset($_SESSION['admin'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>University Support Portal</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/style2.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php
    require "header.php";
    ?>

    <ul class="NavigationBars" id="breadcrumb">
        <li><a class="NavigationBarsli" href="index.html">Home</a></li>
        <li><a class="NavigationBarsli" href="eventcview.php">Registrated Event </a></li>
        <li><a class="NavigationBarsli" href="eventUpdateadmin.php">Event Update</a></li>
        <li><a class="NavigationBarsli" href="faqs.html">FAQs</a></li>
        <li><a class="NavigationBarsli" href="about.php">About Us</a></li>
        <li><a class="NavigationBarsli" href="contact.html">Contact Us</a></li>
    </ul>
    <div class="form-container">

        <form action="eventUpdateProcess.php" method="post">
            <h3>Event Update</h3>

            <input type="text" name="eventName" required placeholder="Enter Event  Name">
            <input type="text" name="date" required placeholder="Enter Event Date">
            <input type="text" name="details" required placeholder="enter event details">
            <input type="submit" name="submit" value="submit" class="form-btn">

        </form>
    </div>

    <h1 style="margin-top: 100px; font-size: 30px;"> Active Events </h1>
    <?php
    include 'config.php';

    // Retrieve tickets data from the database
    $sql = "SELECT * FROM eventupdate WHERE status = '0' ";
    $result = mysqli_query($conn, $sql);

    // Check if there are any tickets
    if (mysqli_num_rows($result) > 0) {
        echo "<table  style='margin-left: auto; margin-right: auto; margin-bottom:50px;'>";
        echo "<tr><th>event id</th><th>event Name</th><th>date</th><th>details</th> <th>Close</th></tr>";

        // Loop through each ticket
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<form action='eventCloseProcess.php' method='POST'>";
            echo "<td> <input type='text' value='" . $row['e_id'] . "' name='e_id' ></td>";
            echo "<td>" . $row['eventName'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['details'] . "</td>";
            echo "<td><input type='submit' value='Close' > </td>";
            echo "</form>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No tickets found.";
    }

    mysqli_close($conn);
    ?>
    </div>

    </div>

    <?php
    require "footer.php";
    ?>
</body>

</html>