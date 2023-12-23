<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>University Support Portal</title>
  <!-- <link rel ="stylesheet" href ="styles/styles.css"> -->
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/style.css">

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

  <?php
  require "header.php";
  ?>

  <main>
    <div class="content-container">
      <div class="left-side">
        <div class="faq-section">
          <h2>Frequently Asked Questions</h2>
          <div class="question">
            <h3>How can I access the online help desk site?</h3>
            <p>You can access the online help desk site by visiting [website URL] and logging in with your university
              credentials.</p>
          </div>
          <div class="question">
            <h3>What services are provided by the online help desk?</h3>
            <p>The online help desk provides services such as technical support, account assistance, troubleshooting,
              guidance on university systems and software, general inquiries, and access to relevant documentation and
              resources.</p>
          </div>
          <div class="question">
            <h3>Who can use the online help desk site?</h3>
            <p>The online help desk site is available for all university students who need assistance or support with
              their academic or technological needs.</p>
          </div>
          <div class="question">
            <h3>How do I submit a request for assistance or support?</h3>
            <p>To submit a request for assistance or support, simply log in to the online help desk site and navigate to
              the "Submit a Request" or "Contact Us" section. Fill out the necessary details and describe your issue or
              request.</p>
          </div>
          <div class="question">
            <h3>Can I track the status of my request on the online help desk site?</h3>
            <p>Yes, you can track the status of your request by logging in to the online help desk site and visiting the
              "My Requests" or "Ticket Status" section. You will be able to see the progress and any updates related to
              your request.</p>
          </div>
          <button class="see-more" onclick="redirectTo('faq.php')">See More</button>
          <br>
          <?php
          if ($isStudent) {
          ?>
            <button class="raise-ticket" onclick="redirectTo('raiseticket.php')">Raise Ticket</button>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="right-side">
        <div class="welcome">
          <h2>Welcome to the Online Help Desk!</h2>
          <p>We understand that navigating the academic and technological landscape can sometimes be challenging, which
            is why we are here to provide you with the assistance and support you need. Our online help desk is designed
            specifically for university students like you, offering a range of services to address your academic,
            technical, and general inquiries.</p>
          <p>Whether you need help with software troubleshooting, account-related issues, accessing university
            resources, or have general questions about university services, our dedicated support team is ready to
            assist you. Through our user-friendly online platform, you can submit requests for assistance, track the
            progress of your inquiries, and access a wealth of self-help resources such as user guides, FAQs, and video
            tutorials.</p>
          <p>We prioritize timely responses to ensure that you receive the support you need as quickly as possible. Our
            team is committed to resolving your issues efficiently and providing you with accurate information and
            solutions. We also welcome your feedback and suggestions for improving our services, as we strive to
            continuously enhance the support we offer. With our secure and accessible online help desk site, you can
            reach out for assistance at any time, from anywhere. We are here to support you throughout your university
            journey and help make your experience as smooth and successful as possible.</p>
          <p>Thank you for choosing our Online Help Desk Site for University Students. We look forward to assisting you
            and being a reliable resource throughout your academic endeavors.</p>
          <button class="signup-button" onclick="redirectTo('signup.php')">Sign Up</button>
          <br><br>
          <?php
          if (!$isLogin) {
          ?>
            <button class="event-registration" onclick="redirectTo('eventreg.php')">Event Registration</button>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </main>


  <?php
  require "footer.php";
  ?>

</body>


</html>