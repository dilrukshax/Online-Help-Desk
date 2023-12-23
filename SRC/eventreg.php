<?php
session_start();
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

  <div class="form-container" style="margin-top: 50px; height: 300px; min-height: 500px;">
    <div style="max-width:500px; margin-top: 100px; ">
      <img class="mySlides" src="images/event1.jpeg" style="width:100%">
      <img class="mySlides" src="images/event2.jpeg" style="width:100%">
      <img class="mySlides" src="images/event3.jpeg" style="width:100%">
    </div>
  </div>

  <h1 style="margin-top: 50px; font-size: 30px;"> Event detals </h1>
  <?php
  include 'config.php';

  // Retrieve tickets data from the database
  $sql = "SELECT * FROM eventupdate WHERE `status` = '0' ";
  $result = mysqli_query($conn, $sql);

  // Check if there are any tickets
  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>event id</th><th>event Name</th><th>date</th><th>details</th></tr>";

    // Loop through each ticket
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['e_id'] . "</td>";
      echo "<td>" . $row['eventName'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['details'] . "</td>";


      echo "</tr>";
    }

    echo "</table>";
  } else {
    echo "<h1 style='margin-top: 100px; font-size: 30px;'> No Tickets Found </h1>";
  }

  mysqli_close($conn);
  ?>


  <div class="form-container">

    <form action="eventregProcess.php" method="post">
      <h3>Event Registration</h3>

      <input type="text" name="FirstName" required placeholder="enter your First Name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="NIC" required placeholder="enter your NIC">
      <input type="text" name="addres" required placeholder="enter your Address">
      <input type="tel" name="phone" required placeholder="enter your phone number">
      <input type="number" name="e_id" required placeholder="enter event id">
      <input type="submit" name="submit" value="submit" class="form-btn">

    </form>

  </div>


  <?php
  require "footer.php";
  ?>
  <script>
    carousel();
  </script>
</body>


</html>