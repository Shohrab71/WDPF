<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Variables</title>
	<style>
		table
		{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php

		$name 		= "Abdur Rahim";
		$address 	= "Dhanmondi";
		$phone 		= "01785789757";
		$age		= 28;

		//valid variable
		$abc;
		$_abc;
		$abc123;

		// invalid variable

		/*$123abc;
		$-abc;
		$abc def;
		$abc-def;
		$ abc;*/

	?>

	<table border="1">
		<tr> <th>Name</th> <th>Address</th> <th>Phone</th> <th>age</th></tr>
		<tr> <td><?php echo $name ?></td> <td><?php echo $address ?></td> <td><?php echo $phone ?></td> <td><?php echo $age ?></td></tr>
		
	</table>
</body>
</html>