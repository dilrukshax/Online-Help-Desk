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
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php
    require "header.php";
    ?>

    <div style="min-height: 600px; margin-top: 100px;">

        <h1 style="margin-top: 100px; font-size: 30px;"> Event Registered </h1>

        <?php

        // Retrieve tickets data from the database
        $sql = "SELECT * FROM event 
        INNER JOIN eventupdate ON eventupdate.e_id = event.event_id ";
        $result = mysqli_query($conn, $sql);

        // Check if there are any tickets
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>e_id</th><th>FirstName</th><th>email</th><th>NIC</th><th>addres</th><th>Phone</th>
            <th>eventName</th><th>date</th><th>details</th>
            </tr>";

            // Loop through each ticket
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['e_id'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['NIC'] . "</td>";
                echo "<td>" . $row['addres'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['eventName'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";

                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No tickets found.";
        }

        mysqli_close($conn);
        ?>

        </table>
    </div>

    <?php
    require "footer.php";
    ?>
</body>

</html>