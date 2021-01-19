<?php


	$date 	= new DateTime();

	// echo "<pre>";
	// print_r($date);

	$date 	= new DateTime("April 5 2020 9:50");

	echo "<pre>";
	print_r($date);

	echo $date->format("d/Y/m h:i:sA");



?>