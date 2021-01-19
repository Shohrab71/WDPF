<?
	
	// function myTest()
	// {
	// 	$x = 0;
	// 	echo $x . "<br>";
	// 	$x++;
	// }

	
	// myTest();
	// myTest();
	// myTest();
	// myTest();
	// myTest();

?>

<?
	
	function myTest()
	{
		static $x = 0;
		echo $x . "<br>";
		$x++;
	}

	
	myTest();
	myTest();
	myTest();
	myTest();
	myTest();

?>