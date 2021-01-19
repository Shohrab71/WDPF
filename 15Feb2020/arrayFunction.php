
<?php


	//Multidimensional Array

	$cars = array
			(
				array("Volvo" , 15 , 35),
				array("BMW" , 30 , 45),
				array("Toyota" , 50 , 45),

			);

	//echo $cars[0][0];

	$cars = array("Volvo", "BMW" , "Toyota", "Ferrari");


	//echo count($cars);

	// imlode function
	$cars = array("Volvo", "BMW" , "Toyota", "Ferrari");

		$string = implode(" - ", $cars);
	echo $string;
?>