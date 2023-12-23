<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>

  <link rel="stylesheet" href="styles/styles.css">
   <link rel="stylesheet" href="styles/login.css">
   <link rel="stylesheet" href="styles/style2.css">
   <link rel="stylesheet" href="styles/style.css">
   <link rel="stylesheet" href="styles/index.css">
   <link rel="stylesheet" href="styles/style.css">

  <!-- <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/style.css"> -->

  <script src="js\script.js"></script>

</head>

<body>

  <?php
  require "header.php";
  ?>

  <div class="form-container">

    <form action="signupProcess.php" method="post">
      <h3>register now</h3>

      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
        <option value="Student">Student</option>
        <option value="Helpdesk">Helpdesk staff</option>
        <option value="Academic">Academic staff</option>
        <option value="Admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
    </form>

  </div>

  <?php
  require "footer.php";
  ?>

</body>


</html>