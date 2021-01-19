<?
	
	//echo date("d/M/Y");

	echo checkdate(12, 29, 2017) ? "Tomake DhonnoBad Tumi Sothik Tarikh Diecho" : "Tomake Dhoira Kuchi kuchi korbo Tumi vul Tarikh Diecho";

	// echo date("l");

	echo "Today is " . date("Y/m/d");

	$timestamp 	= time();

	$data 		= getdate($timestamp);





	echo "<pre>";

	print_r($data);


	echo $data["mday"];






	// --------------------------------------



	$mytimestamp	 = mktime(15,20,11,01,10,2018);

	$mytimestam2 	 = getdate($mytimestamp);

	print_r($mytimestam2);


	// --------------------------------------
	


?>