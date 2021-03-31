<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Assignment #2                                          

                                                                  
-->
<!--
  page description:

  this page contains a form with multiple questions to take a feedback from the users.

-->

<!--------------------------------- START PHP ---------------------------> 
<?php
    if (isset($_POST['submit'])){
// the variables:
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age   = $_POST['age'];
        $gender = $_POST['gender'];
        $city   = $_POST['city'];
        $email = $_POST['email'];
        $interest = $_POST['ans'];
        $pname    = $_POST['pname'];
        $reason = $_POST['reason'];
        $find = $_POST['find'];
        $bestpages = $wrongpages = "";
        foreach ($_POST['bestpages'] as $best){

            $bestpages .= $best."\n";
        }

        foreach ($_POST['wrongpages'] as $wrong){
            $wrongpages .= $wrong."\n";
        }
        $suggest = $_POST['comment'];


        $conn = mysqli_connect("localhost","id7339167_root","123456789","id7339167_plants"); // to connect with DB
        $sql="SELECT * FROM feedback";
        $result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){ //check if the feedback table is not empty

$check="SELECT  id from feedback WHERE email ='$email'";
$records = mysqli_query($conn,$check);

if(mysqli_num_rows($records)==0){ // check if the email was not registered before 
 $insert = "INSERT INTO feedback VALUES  (NULL,'$fname','$lname','$age','$gender','$city','$email','$interest','$pname','$reason','$find','$bestpages','$wrongpages','$suggest' )";

        if (mysqli_query($conn,$insert)){
          echo "<script>alert('Your feedback was sent successfully! Thank you');</script>";
        } // end insert successfully
} 
else{
    echo "<script>alert('The Email: $email  is already registered');</script>";
    
 } // end else

    } // end check rows of feedback


    else{ // if the feedback table is empty just insert the user info
      $insert = "INSERT INTO feedback VALUES  (NULL,'$fname','$lname','$age','$gender','$city','$email','$interest','$pname','$reason','$find','$bestpages','$wrongpages','$suggest' )";

        if (mysqli_query($conn,$insert)){
          echo "<script>alert('Your feedback was sent successfully! Thank you');</script>";
        } // end insert successfully  
    } // end else
 mysqli_close($conn);
 } // end if submet 
?>
<!--------------------------------- END PHP ---------------------------> 


<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="../global/main.css">
    <script src="../pages/validation.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="setActiveFunction('h9')">
<!--------------------------------- START HEADER ---------------------------> 
<div>
<?php include("../includes/header.php");?>
</div>             

<!--------------------------------- END HEADER --------------------------->  
<br>
<br>
<!--------------------------------- START SECTION --------------------------->
<div class="feedback"><section>
<!--------------------------------- START FORM --------------------------->  
	<form method="post" action="feedback.php" id="feedback-form">
	<!------------------------ START FIELDSET #1 ------------------------>
		<fieldset class="filedlist">
			<legend>Personal Information</legend> <!--legend #1 -->

			<!-- question #1 -->
			<label> First Name:</label>
			<input class="input" placeholder="Enter first name ..." type="text" name="fname" >
			<br> <br>

			<!-- question #2 -->
			<label> Last Name:</label>
			<input class="input" type="text" placeholder="Enter last name ..." name="lname" >
			<br> <br>

			<!-- question #3 -->
			<label> Age:</label>
			<input class="input" placeholder="Enter your age ....." type="number" name="age" >
			<br> <br>

			<!-- question #4 -->
            <input type="radio"   id="gender_male"  value="male" name="gender">
			<label for="gender_male">Male</label>
			<input type="radio"  id="gender_female" value="female" name="gender">
			<label for="gender_female">Female <span id="gender_error" style="color: red"></span></label>
			<br> <br>

            <!-- question #5 -->
			<label> City:</label>
			<input class="input" placeholder="Enter your city ...." type="text"  name="city">
			<br> <br>

			<!-- question #6 -->
			<label> Email:</label>
			<input class="input" type="email" name="email" placeholder="Enter your email ..." >
			<br> <br>

			<!-- question #7 -->
            <label>Are you interested in plants? </span></label>
            <input type="radio"  onclick="changeValue(this)" id="yes" value="yes"  name="ans">
			<label for="yes">Yes</label>
			<input type="radio" onclick="changeValue(this)" id="no" value="no" name="ans">
			<label for="no">No <span id="interest_error" style="color: red"></label>
			<br> <br>

			<!-- question #8 -->
            <div id="pname" style="display: none">
                <label> If "yes" in the previous question, what is the name of your favorite plant?
                </label>
                <br>
                <input class="input"  type="text" name="pname" placeholder="Enter plant name">

            </div>
			<br> <br>

		</fieldset>
           <!------------------------ END FIELDSET #1 ------------------------>


          <!------------------------ START FIELDSET #2 ------------------------>
		<fieldset>
			<legend>Feedback</legend> <!--legend #2 -->

			<!-- question #9 -->
			<label> What was the reason for visiting "Nbtah"?</label>
			<br>
			<input class="input"  type="text" name="reason" placeholder="Enter your reason">
			<br> <br>

			<!-- question #10 -->
            <label for="find">How easy is it to find what you want?</label>
            <select id="find" class="find" name="find">
            	<option value="Very">Very</option>
            	<option value="Fairly">Fairly</option>
            	<option value="Not_Very">Not Very</option>
            	<option value="Not_At_All">Not At All</option>
            </select>
            <br><br>

            <!-- question #11 -->
            <label>What do you think are the best pages? <span id="checkError1" style="color: red"></span></label>
            <br>
            <input type="checkbox" name="bestpages[]" value="home_page"> <label> The Home Page </label>
            <br>
            <input type="checkbox" name="bestpages[]" value="info_page"> <label>The Information Page
            </label><br>
            <input type="checkbox" name="bestpages[]" value="tips_page"> <label>The Tips Page</label><br>
            <input type="checkbox" name="bestpages[]" value="music_page"> <label>The Music Page</label>
            <br>
            <input type="checkbox" name="bestpages[]" value="gellary"> <label>Gellary</label>
            <br>
            <input type="checkbox" name="bestpages[]" value="todolist"> <label>To Do List</label>
            <br>
            <input type="checkbox" name="bestpages[]" value="Q_page"> <label>The Questions Page</label>
            <br>
            <input type="checkbox" name="bestpages[]" value="resume"> 
            <label>Resume</label>
            <br>
            <br> 

            <!-- question #12 -->
             <label>What do you think are the worst pages? <span id="checkError2" style="color: red"></span></label>
            <br>
            <input type="checkbox" name="wrongpages[]" value="home_page"> <label> The Home Page</label>
            <br>
            <input type="checkbox" name="wrongpages[]" value="info_page"> <label>The Information Page
            </label><br>
            <input type="checkbox" name="wrongpages[]" value="tips_page"> <label>The Tips Page</label><br>
            <input type="checkbox" name="wrongpages[]" value="music_page"> <label>The Music Page</label>
            <br>
            <input type="checkbox" name="wrongpages[]" value="gellary"> <label>Gellary</label>
            <br>
            <input type="checkbox" name="wrongpages[]" value="todolist"> <label>To Do List</label>
            <br>
            <input type="checkbox" name="wrongpages[]" value="Q_page"> <label>The Questions Page</label>
             <br>
            <input type="checkbox" name="wrongpages[]" value="resume"> 
            <label>Resume</label>
            <br>
            <br> 

            <!-- question #13 -->
			<label>Do you have any suggestions to make "Nbtah" better?</label>
			<br> <br>
			<center>
            <input type="textarea" name="comment" class="suggestions">
                <br>
                <span id="error"></span>

            </center>
		</fieldset>
		<!------------------------ END FIELDSET #2 ------------------------>
		<br> 
		<input class="button" type="submit" name="submit" value="submit" onclick="validationFunction()"> <!--submit button -->

	</form>
	<!--------------------------------- END FORM --------------------------->
</section>
</div>
<!--------------------------------- END SECTION --------------------------->
<br>
<br>
<!--------------------------------- START FOOTER --------------------------->
<div>
<?php include("../includes/footer.php");?>
</div>

<!--------------------------------- END FOOTER --------------------------->
<!--------------------------------- START JS --------------------------->
<script>
    function changeValue(item) {
// this function helps to show/ hide "Q8", where if the user chooses -Yes- in "Q7" the "Q8" will appear but if the user chooses -No- the "Q8" will not appear
        if (item.value === "no"){
            document.getElementById("pname").style.display = "none";
        }else {
            document.getElementById("pname").style.display = ""; }

    }
</script>
<!--------------------------------- END JS --------------------------->
</body>
</html>