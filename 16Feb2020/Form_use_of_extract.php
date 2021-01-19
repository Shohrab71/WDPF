<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>


	
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
		
		extract($_REQUEST);

		echo "Name : ".$fname."<br>";
		echo "Last Name : ".$lname."<br>";
		echo "Gender : ".$gender."<br>";
		echo "Address : ".$address."<br>";
		echo "District : ".$district."<br>";
	
	}
 
	?>
	
</body>
</html>