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

    <div class="form-container"  style=" margin-top: 50px;">

        <form action="raiseticketProcess.php" method="post">
            <h3>Raise Ticket</h3>

            <input type="text" name="S_ID" required placeholder="enter your student ID">
            <input type="text" name="S_Name" required placeholder="enter your Name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="tel" name="phone" required placeholder="enter your phone number">
            <select name="faculties">
                <option value="computing">Faculties of Computing</option>
                <option value="business">Faculties of Business</option>
            </select>
            <input type="text" name="subject" required placeholder="subject">
            <textarea id="text" name="msg" required placeholder="enter your Message"></textarea><br>
            <input type="submit" name="submit" value="submit" class="form-btn">

        </form>

    </div>


    <?php
    require "footer.php";
    ?>

</body>

</html>