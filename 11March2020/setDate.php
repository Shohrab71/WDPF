<?php



	$date 	= new DateTime();

	echo "<pre>";
	//print_r($date);
		 $date->setDate(2020, 5, 15);
	echo $date->format("d/m/Y");



?>