<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!-- <a href="get.php?Name=AbdusSalam &address=Motijil &phone=0187554125">Test Get Method</a> -->
	<a href="get.php?country=Bangladesh">Bangladesh</a>
	<a href="get.php?country=India">India</a>
	<a href="get.php?country=Japan">Japan</a>


</body>

<?php

	//print_r($_GET);
	// echo "<br>";
	// echo $_GET["country"];

	// echo $_GET['Name'];
	// echo "<br>";
	// echo $_GET['address'];
	echo "<br>";
	if
		($_GET["country"] == "Bangladesh")
	{
		echo "Welcome All Bangladeshis";
	}

	else if
		($_GET["country"] == "India")
	{
		echo "Welcome All Indian";
	}

	else if ($_GET["country"] == "Japan")
	{
		echo "Welcome to All Japanis";
	}
?>

</html>
<?php
?>
