<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sPrintf</title>
</head>
<body>
	<?php

		$number = 200;
		$str 	= "Dhaka";
		$txt	= sprintf("There are %u million bicycle in %s. " ,$number,$str);

		//echo $txt;
		
		$cost = sprintf("%u", 43.2);
		//echo $cost;

		$cost = sprintf("%f", 43.2);
		//echo $cost;

		$cost = sprintf("The cost is Taka %.2f", 43.2);
		echo $cost;

	?>
</body>
</html>