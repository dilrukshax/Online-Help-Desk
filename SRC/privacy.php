<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/privacy.css">

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
      <div class="container-privacy">
        <h2>Privacy Policy</h2>
        <h3>Information Collection</h3>
        <p>We collect certain personal information from users to provide support services through our online help desk. The information we collect may include:</p>
        <ul>
          <li>Name</li>
          <li>Email address</li>
          <li>Student ID number</li>
          <li>Contact number</li>
          <li>Faculty</li>
          <!-- Add any other relevant information -->
        </ul>

        <h3>Use of Information</h3>
        <p>The collected information is used for the following purposes:</p>
        <ul>
          <li>Providing support and resolving inquiries</li>
          <li>Improving our services and user experience</li>
          <li>Communicating important updates and announcements</li>
        </ul>

        <h3>Data Storage and Security</h3>
        <p>We take appropriate measures to securely store and protect user information. We employ strict access controls, encryption techniques, and regular system monitoring to prevent unauthorized access, loss, or misuse of personal data.</p>

        <h3>Information Sharing</h3>
        <p>We may share user information with the following parties:</p>
        <ul>
          <li>University administrators and support staff for the purpose of providing assistance</li>
          <li>Third-party service providers who help us deliver our services</li>
          <!-- Add any other relevant parties -->
        </ul>

        <h3>Cookies and Tracking Technologies</h3>
        <p>We use cookies and similar tracking technologies to enhance user experience and collect anonymous usage statistics. By using our website, users consent to the use of these technologies.</p>

        <h3>User Rights</h3>
        <p>Users have the right to:</p>
        <ul>
          <li>Access and review their personal information</li>
          <li>Update or correct their information</li>
          <li>Request deletion of their information</li>
        </ul>

        <h3>Data Retention</h3>
        <p>We retain user data for as long as necessary to fulfill the purposes outlined in this privacy policy. Once the data is no longer needed, it will be securely deleted.</p>

        <h3>External Links</h3>
        <p>Our website may contain links to external sites. We are not responsible for the privacy practices or content of these sites and encourage users to review their respective privacy policies.</p>

        <h3>Updates to the Privacy Policy</h3>
        <p>This privacy policy may be updated periodically. Any changes will be reflected on this page, and users are encouraged to check back regularly for updates.</p>

        <h3>Contact Us</h3>
        <p>If you have any questions or concerns regarding this privacy policy, please contact us at privacy@universityhelpdesk.com.</p>
      </div>
  </main>


  <?php
  require "footer.php";
  ?>
</body>


</html>