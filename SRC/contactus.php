<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!-- Header -->
<head>
  <title> Contact Us </title>
  <link rel="stylesheet" href="styles/contactus.css">
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
<!-- Body -->
<body>
<!-- Header -->
  <?php
  require "header.php";
  ?>

  <main>

    <div class="content-container">
      <div class="section">
        <h1>Contact Us</h1>
        <hr><br>
        <div class="contactus-content">

          <ul>
            <li>Email:</li>
            <p>
              For non-urgent inquiries or detailed questions, you can send us an email at support@universitysupportportal.com.
              We strive to respond to all emails within 24 hours.
            </p>

            <li>Phone:</li>
            <p>
              If you prefer speaking with someone directly, you can call our helpline at 011 2 345 678 / 071 234 5678.
              Our knowledgeable team members will be happy to assist you during our regular business hours.
            </p>

            <li>Frequently Asked Questions (FAQs):</li>
            <p>
              Before reaching out, make sure to check our comprehensive FAQs section on our website.
              You may find answers to many common questions and concerns there.
            </p>

            <li>Feedback and Suggestions:</li>
            <p>
              We value your feedback and suggestions to continually improve our services.
              If you have any ideas or recommendations, please email us at feedback@universitysupportportal.com.
            </p>

            <li>Social Media:</li>
            <p>
              Connect with us on social media platforms like Facebook, Twitter, Instagram, and Linkedin.
              We regularly update our pages with helpful information, tips, and announcements.
            </p>
          </ul>
        </div>
      </div>
      <div class="section">
        <div class="contactus-container">

          <form>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required> <br>

            <label for="mobile_number">Mobile Number:</label>
            <input type="text" id="mobile_number" name="mobile_number"><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" cols="10" required></textarea><br>

            <button herf="contactus.html" type="submit" class="button">Submit</button>
          </form>
        </div>
      </div>
    </div>


  </main>

  <?php
  require "footer.php";
  ?>
</body>

</html>