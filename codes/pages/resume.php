<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Final project                                          

                                                                  
-->
<!--
  page description:

  this page contains my resume in PDF format
-->
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="../global/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="setActiveFunction('h8')">
<!--------------------------------- START HEADER --------------------------->
<div>
<?php include("../includes/header.php");?>
</div>

<!--------------------------------- END HEADER --------------------------->
<!--------------------------------- START SECTION --------------------------->

<section class="resumeSection">
  
    <div class="pdf-container">
        <center>
          <!-- the resume is insaid object tag -->
        <object 
        class="resumepdf"
        data="resume.pdf#toolbar=0&navpanes=0&scrollbar=0" 
        type="application/pdf">  
        </object>
        </center>
    </div>
  
</section>
<!--------------------------------- END SECTION --------------------------->

<!--------------------------------- START FOOTER --------------------------->
<br>
<br>
<br>

<!--------------------------------- START FOOTER --------------------------->
<div>
<?php include("../includes/footer.php");?>
</div>
<!--------------------------------- END FOOTER --------------------------->
</body>
</html>