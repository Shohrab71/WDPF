<?
	echo "Welcome to php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

	<?
		$x = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam libero molestiae rem? A neque accusantium, saepe nesciunt nostrum, sunt magni corporis, ullam accusamus, minima voluptas! Natus error illum, quibusdam voluptas!";

	?>

<body>
	<p style="font-weight: bold"> PHP Block can be written anywhere in the page</p>

	<?

		echo $x;
	?>


	<?

		$name  = "Abdur Rahim";
		$address = "Kakrail, Dhaka";

		echo "<br>";
		echo "Student's name is $name and his address is $address";

		echo "<br>";
		echo 'Student\'s name is '.$name  . 'and his address is '.$address;

	?>
</body>
</html>