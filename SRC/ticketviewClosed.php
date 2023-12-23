<?php
include 'config.php';

session_start();

if (!isset($_SESSION['help'])) {
    header('location: login.php');
    exit();
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


    <div style="min-height: 600px; margin-top: 100px;">
    <h1 style="margin-top: 100px; font-size: 30px;"> Closed Tickets </h1>
    <table>
        <tr>
            <th>Ticket ID</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Faculty</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Answer</th>

        </tr>

        <?php
        include 'config.php';

        // Retrieve tickets data from the database
        $sql = "SELECT * FROM tickets WHERE status = '2'";
        $result = mysqli_query($conn, $sql);

        // Check if there are any tickets
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                echo "<td>" . $row['T_id'] . "</td>";
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
        } else {
            echo "<tr><td colspan='10'><h1 style='margin: 30px; font-size: 30px;'> No Tickets found </h1></td></tr>";
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