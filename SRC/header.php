<?php

$isLogin = false;
$isStudent = false;
$isHelpdesk = false;
$isAcademic = false;
$isAdmin = false;

$userDetails = "";

if (isset($_SESSION['student'])) {
    $isStudent = true;
    $isLogin = true;
    $userDetails = $_SESSION['student'];
} else if (isset($_SESSION['help'])) {
    $isHelpdesk = true;
    $isLogin = true;
    $userDetails = $_SESSION['help'];
} else if (isset($_SESSION['academic'])) {
    $isAcademic = true;
    $isLogin = true;
    $userDetails = $_SESSION['academic'];
} else if (isset($_SESSION['admin'])) {
    $isAdmin = true;
    $isLogin = true;
    $userDetails = $_SESSION['admin'];
}
?>
<script src="js/script.js"></script>
<header>
    <img src="images/a.png" alt="logo" style="width: 180px;">

    <nav class="navigation">
        <a href="index.php">Home</a>

        <?php
        if ($isStudent) {
        ?>
            <a href="raiseticket.php">Raise Ticket</a>
            <a href="studentTicket.php">My Ticket</a>
            <a href="studentTicketClosed.php">Closed Ticket</a>
        <?php
        } else if ($isHelpdesk) {
        ?>
            <a href="ticketview.php">My Ticket</a>
            <a href="ticketviewClosed.php">Closed Ticket</a>
        <?php
        } else if ($isAdmin) {
        ?>
            <a href="eventviewAdmin.php">Registrated Event </a>
            <a href="eventUpdateadmin.php">Event Update</a>
        <?php
        } else {
        ?>
            <a href="eventreg.php">Event Registration</a>
        <?php
        }
        ?>
        <a href="faq.php">FAQs</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Contact Us</a>
        <?php
        if ($isLogin) {
        ?>
            <span style="color: white; margin-left: 50px; font-weight: bold; font-size: 20px;">Hi <?php echo  $userDetails["name"]; ?></span>
            <button class="btnLogin-popup" onclick="redirectTo('logout.php');">log out</button>
        <?php
        } else {
        ?>
            <button class="btnLogin-popup" onclick="redirectTo('login.php');">Login</button>
            <button class="btnSignup-popup" onclick="redirectTo('signup.php');">Signup</button>
        <?php
        }
        ?>

    </nav>
</header>