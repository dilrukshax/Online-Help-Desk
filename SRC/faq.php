<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>FAQs</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/faqstyle.css">

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
    <div class="faqs-container">
      <h2>Frequently Asked Questions</h2>

      <div class="questions-container">
        <div class="content-container">
          <div class="faq-header">
            <h3>How do I apply for admission to the university?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            To apply for admission, visit the university's official website and look for the "Admissions" section. 
            There you will find information on the application process, requirements, deadlines, and any necessary forms or documents.</p>

          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>What is the process for resetting my university password?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            To check the status of your application, log in to the applicant portal provided by the university during the application process
            . If you have any specific concerns or questions, contact the admissions office directly.</p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>What are the tuition fees for the university?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            Tuition fees vary depending on factors such as the program of study, residency status, and specific courses. 
            To find detailed information about tuition fees, visit the university's official website or contact the financial aid office.  If you encounter any issues, please contact the help desk for troubleshooting.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>How do I apply for financial aid or scholarships?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            To apply for financial aid or scholarships, visit the university's financial aid office website or contact them directly. 
            They will provide information on the application process, required documents, and deadlines.</p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>What resources are available for technical support with university-owned devices?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              The help desk provides technical support for university-owned devices.
              Please contact them with details of the issue you're facing, and they will assist you accordingly.
              Make sure to provide any relevant error messages or device information for faster resolution.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>How do I access my student email account?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
            To access your student email account, visit the university's email portal or follow the instructions provided by the IT department during orientation.
             Typically, your login credentials and instructions will be provided to you upon enrollment.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>How can I print documents on campus?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Printing services are available on campus at designated locations.
              To print documents, ensure that you have sufficient funds in your printing account. Upload your documents to the printing system, select the desired print settings, and release the print job at a nearby printer.
              If you need assistance, the help desk can guide you through the process.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>What software is available for students to download or use on their personal computers?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              The university provides access to various software applications for students.
              Check the software download section on the university's website or contact the help desk to inquire about the available software and instructions for downloading and installing them on your personal computer.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>Where can I find information about library services and resources?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Information about library services and resources can be found on the library's website.
              Browse the library's online catalog, access electronic databases, and explore other library services.
              If you have specific questions or need assistance with research or resources, the library staff or the help desk can provide guidance.
            </p>
          </div>
        </div>

        <div class="content-container">
          <div class="faq-header">
            <h3>How do I submit assignments electronically through the university's learning management system?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              To submit assignments electronically, log in to the university's learning management system (LMS) and navigate to the respective course.
              Look for the assignment submission area or folder designated by your instructor. Follow the instructions provided to upload your assignment file or enter the required information.
              If you encounter any issues, contact the help desk for assistance.
            </p>
          </div>
        </div>

        <script src="js/faqscript.js"></script>
      </div>
    </div>
  </main>

  <?php
  require "footer.php";
  ?>
</body>




</html>