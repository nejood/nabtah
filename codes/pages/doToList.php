<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Final project                                          

                                                                  
-->
<!--
  page description:

  this page contains a list of some imortant tasks that help plants to grow wonderfully. The user can add more tasks, checked task or delete it. 
-->

<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" type="text/css" href="../global/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body onload="setActiveFunction('h6')">
<!--------------------------------- START HEADER ---------------------------> 
<div>
<?php include("../includes/header.php");?>
</div>                

<!--------------------------------- END HEADER --------------------------->  
<br>
<br>
<!--------------------------------- START SECTION --------------------------->
<center>
<div class="doList_div">

<div id="myDIV" class="headerDO">
  <h2 class="MyList">My To Do List</h2> <!--The title of the list -->
  <input class="inputDo" type="text" id="myInput" 
         placeholder="Add more tasks...">
  <button onclick="newElement()" class="addBtn">Add </button> <!--call Js function to add more item -->
</div>
<!--List items: -->
<ul class="ulDO" id="myUL">
  <li class="ul_li_DO">plants irrigation</li>
  <li class="ul_li_DO">Plants Fertilization</li>
  <li class="ul_li_DO">Play music for plants</li>
  <li class="ul_li_DO">Exposure of plants to the sun</li>
</ul>

</div>
</center>
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
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByClassName("ul_li_DO");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector(".ulDO");
list.addEventListener('click', function(ev) {
  if (ev.target.className === 'ul_li_DO') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var liv = document.createElement("LI");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  liv.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    var inputVar = document.getElementById("myUL").appendChild(liv);
        inputVar.setAttribute("class", "ul_li_DO"); ; 
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  liv.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>
<!--------------------------------- END JS --------------------------->

</body>
</html>