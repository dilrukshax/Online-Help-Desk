<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);

   // echo  $email . " " . $pass;

   $query = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $query);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'Student') {
         $_SESSION['student'] = $row;
         header('location:index.php');

      } elseif ($row['user_type'] == 'Helpdesk') {
         $_SESSION['help'] = $row;
         header('location:index.php');

      } elseif ($row['user_type'] == 'Academic') {
         $_SESSION['academic'] = $row;
         header('location:index.php');

      } elseif ($row['user_type'] == 'Admin') {
         $_SESSION['admin'] = $row;
         header('location:index.php');

      } else {
         $error[] = 'incorrect email or password!';
      }
   }
};
?>
<!DOCTYPE html>
<html>

<head>
   <title>Login</title>
   
   <link rel="stylesheet" href="styles/styles.css">
   <link rel="stylesheet" href="styles/login.css">
   <link rel="stylesheet" href="styles/style2.css">
   <link rel="stylesheet" href="styles/style.css">
   <link rel="stylesheet" href="styles/index.css">
   <link rel="stylesheet" href="styles/style.css">

</head>

<body>

   <?php
   require "header.php";
   ?>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="signup.php">register now</a></p>
      </form>

   </div>

   <?php
   require "footer.php";
   ?>


</body>


</html>