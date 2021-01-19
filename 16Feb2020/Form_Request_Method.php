<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<!-- 
	//<?php
	//echo "<pre>";
		//print_r($_POST);
	//echo "</pre>";
	//?>

	<h2>Data sending to server using form</h2>
	<form action="" method="POST">
		
		<input type="text" name="fname" placeholder="Type your first name"> <br>	
		<input type="text" name="lname" placeholder="Type your last name">	<br>
		<input type="submit" name="submit" value="SEND">	
	

	</form> -->


	<?php
		
		$firstName = $_REQUEST["fname"];
		$lastName = $_REQUEST["lname"];

		echo "$firstName <br> $lastName";




	?>

	<h2>Data sending to server using form</h2>
	<form action="" method="get">
		
		<input type="text" name="fname" placeholder="Type your first name"> <br>	
		<input type="text" name="lname" placeholder="Type your last name">	<br>
		<input type="submit" name="submit" value="SEND">	
	

	</form>
</body>
</html>