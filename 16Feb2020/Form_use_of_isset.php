<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

	<?php

	if (isset($_REQUEST["submit"]))
	{
	// echo "<pre>";
	// 	print_r($_REQUEST);
	//  echo "</pre>";

	$first = $_REQUEST["fname"];
	$last = $_REQUEST["lname"];
	$Gender = $_REQUEST["gender"];
	$Address = $_REQUEST["address"];
	$Dsitrict = $_REQUEST["district"];

	
	}

	?>
	
	<h2>Data sending to server using form</h2>
	<form action="" method="POST">
		
		<input type="text" name="fname" placeholder="Type your first name"> <br>	
		<input type="text" name="lname" placeholder="Type your last name">	<br>
		<label>Male</label><input type="radio" name="gender" value="male">
		<label>Female</label><input type="radio" name="gender" value="female">
		<br>
		<textarea name="address" id="" cols="30" rows="10" placeholder="input your address"></textarea>
		<br>
		<select name="district" id="">
			<option value="Comilla">Comilla</option>
			<option value="Patuakhali">Patuakhali</option>
			<option value="Madaripur">MadariPur</option>
			<option value="Noakhali">Noakhali</option>
		</select>
		<br>
		<input type="submit" name="submit" value="SEND">	
	

	</form>

	<?php
	if (isset($_REQUEST["submit"]))
	{
		
		echo "First Name : " . $first. "<br>"; 
		echo "Last Name : " . $last. "<br>";
		echo "Gender : " . $Gender. "<br>"; 
		echo "Address : " . $Address. "<br>";
		echo "District : " . $Dsitrict. "<br>";
	}
 
	?>
	<!-- 
	
	//<?php
		
		//    $firstName = $_REQUEST["fname"];
		//    $lastName = $_REQUEST["lname"];

	//	      echo "$firstName <br> $lastName";




	?>

	<h2>Data sending to server using form</h2>
	<form action="" method="get">
		
		<input type="text" name="fname" placeholder="Type your first name"> <br>	
		<input type="text" name="lname" placeholder="Type your last name">	<br>
		<input type="submit" name="submit" value="SEND">	
	

	</form> -->
</body>
</html>