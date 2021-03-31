<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Assignment #2                                          

                                                                  
-->
<!--
	page description:

	this page contains a list of plants in table.
	it is organizing the website where the table classified the plants type and the pages link.

-->
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
	<title>Information about plants</title>
	<link rel="stylesheet" type="text/css" href="../global/main.css">
	<link rel="stylesheet" type="text/css" href="print.css" media="print"> <!----print CSS----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="setActiveFunction('h2')">
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
	<!--------------------------------- START TABLE --------------------------->	
    <table class="tableInfo">
	<caption class="captionInfo">Table of plants list</caption>
	<!-------- TABLE HEAD ------->
	<thead>
	<tr>
		<th>
			Plant Type
		</th>
           
		<th>
			Plant Name
		</th>

		<th>
			Link
		</th>
	</tr>
  </thead>
  <!---------------------------->
  <!-------- TABLE BODY ------->
<tbody>
	<tr>
		<td rowspan="3">Indoor Plants</td>   <!-----------rowspan---------->
		<td>Aloe</td>
		<td><a href="Aloe.php">Read More..</a></td>
	</tr>

	<tr>
		<td> Begonias</td>
		<td><a href="Begonias.php">Read More..</a></td>
	</tr>

	<tr>
		<td> African Violt</td>
		<td><a href="AfricanViolt.php">Read More..</a></td>
	</tr>

	<tr>
		<td rowspan="3">Outdoor Plants</td>
		<td>Areca Palm</td>
		<td><a href="AreaPlam.php">Read More..</a></td>
	</tr>

	<tr>
		<td> Calathea</td>
		<td><a href="Calathea.php">Read More..</a></td>
	</tr>

	<tr>
		<td> Croton</td>
		<td><a href="Croton.php">Read More..</a></td>
	</tr>

	<tr>
		<td  colspan="3"> <span class="star"> * </span> <b>Note:</b> to read more information about a plant just click its link </td> <!-----------colspan---------->
	</tr>

</tbody>
  <!---------------------------->
</table>
<!--------------------------------- END TABLE --------------------------->
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
</body>
</html>