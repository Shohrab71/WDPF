<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array in Php</title>
</head>
<body>
	<?php

		$days = ["Sunday", "Monday" , "Tuesday" , "Wednesday" , "Thirsday" , "Friday" , "Saterday"];

		$fruits = array("Apple", "Mango", "Orange","Grape");

		print $days[1];
		print("<br>");
		print $fruits[0]. "<br>";

		for($i = 0; $i<count($fruits); $i++){
			echo $fruits[$i] . "<br>";}

	?>
</body>
</html>