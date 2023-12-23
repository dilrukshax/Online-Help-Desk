<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title> About Us </title>
  <link rel="stylesheet" href="styles/aboutus.css">
  <link rel="stylesheet" href="styles/index.css">

  <style>
    body {
      background-image: url("images/b.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
  </style>

</head>

<body>
<!-- Header -->
  <?php
  require "header.php";
  ?>

  <main>

<!-- About Us -->
    <div class="content-container">
      <div class="section">
        <h1>About Us</h1>
        <hr><br>
        <div class="aboutus-container">
          <h2>Our Mission</h2>
          <div class="aboutus-content">
            <p>
              At universitysupportportal.com, our mission is to empower university students by providing comprehensive support and resources, helping them navigate the challenges of academia and achieve their full potential.
              We are committed to delivering timely and accurate assistance, fostering a seamless and successful university experience for every student.
            </p>
          </div>
          

          <h2>Our Vision</h2>
          <div class="aboutus-content">
            <p>
              Our vision is to be the leading online help desk for university students, recognized for our exceptional support, reliable resources, and innovative solutions.
              We strive to create a community where students feel supported, informed, and empowered to overcome obstacles and excel academically.
            </p>
          </div>
        </div>
      </div>
    </div>


  </main>

  <!-- Footer -->

  <?php
  require "footer.php";
  ?>
</body>

</html>