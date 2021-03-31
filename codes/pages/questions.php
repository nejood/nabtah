<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Assignment #2                                          

                                                                  
-->
<!--
  page description:

  this page for display all questions that in the database and allows the user to answer/ask any question.

-->
<?php
   $conn = mysqli_connect("localhost","id7339167_root","123456789","id7339167_plants");

    if (isset($_POST['answer-submit'])){

        $ques_id = $_POST['ques_id'];
        $content = $_POST['answer'];

         $insertAnswer = "INSERT INTO answers VALUES (null ,'$content','$ques_id')";
        mysqli_query($conn,$insertAnswer);


    }elseif (isset($_POST['question-submit'])){

        $content = $_POST['question'];
        $insertQuestion = "INSERT INTO questions VALUES(NULL ,'$content')";
        mysqli_query($conn,$insertQuestion);
    }

    $allQuestionsSql = "SELECT * FROM questions ";
    $allQuestions = mysqli_query($conn,$allQuestionsSql);


?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
	<title>Questions</title>
	<link rel="stylesheet" type="text/css" href="../global/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="setActiveFunction('h7')">

<!--------------------------------- START HEADER ---------------------------> 
<div>
<?php include("../includes/header.php");?>
</div>
<!--------------------------------- END HEADER --------------------------->  
<br>
<br>
<!--------------------------------- START SECTION --------------------------->
<div>
    <section>
        <form class="question question-form" id="question_form"  action="questions.php" method="post">
            <input type="text" class="input" placeholder="Enter your question" name="question" required>
            <input type="submit" class="submit" value="Ask" name="question-submit" id="">
        </form>
        <button class="question" onclick="showForm()">Ask a question </button>
        <div class="question_div">
            <?php $questionCount = 0 ?>
            <?php while($question = $allQuestions->fetch_assoc()):?>
                <?php $questionCount++ ?>
                <div class="question-content">
                    <h3>Qustion <?php echo $questionCount ." : " .$question['content'] ?>  </h3>
                    <?php
                    $answersSql = "SELECT * FROM answers WHERE ques_id = '{$question['id']}' ";
                    $answersQuery = mysqli_query($conn,$answersSql);
                    $answerCount = 0;
                    while ($answer = $answersQuery->fetch_assoc()){
                        $answerCount++;
                        echo "<p class='answer'>Answer $answerCount : {$answer['content']}</p>";

                    }

                    ?>
                    <form class="answer answer-form" action="questions.php" method="post">
                        <input class="input" type="text" required placeholder="Answer question ...." name="answer">
                        <input type="hidden" name="ques_id" value="<?php echo $question['id']?>" >
                        <input type="submit" name="answer-submit" value="Answer" class="submit">
                    </form>
                    <br>
                </div>

            <?php endwhile;?>
            
		</div>
	</section>
</div>
<!--------------------------------- END SECTION --------------------------->
<br><br>
<!--------------------------------- START FOOTER --------------------------->
<div>
<?php include("../includes/footer.php");?>
</div>
<!--------------------------------- END FOOTER --------------------------->
<script>
    function showForm(){
//this function will appear the textbox to write a question
        var form = document.getElementById("question_form");
        form.style.display = "block";
   }
</script>
</body>
</html>