<?

	// inArray funtction return 1 or null
	
	// $state = "Ohio";
	// $states = ["California", "Hawaii", "Ohio", "NewYork"];

	// echo in_array($state, $states);
// -------------------------------
	// $state = "NewYork";
	// $states = ["California", "Hawaii", "Ohio", "NewYork"];

	// if(in_array($state, $states))
	// 	{
	// 		echo "$state is there";
	// 	}
	// else
	//     {
	//     	echo "$state is not there";
	// 	};

// ________________________________


	$population = array("Dhaka" =>10, "Rajshahi" => 5, "Khulna"=> 12);
	$dist      = "Dhaka";

	// echo array_key_exists($dist, $population);
// ----------------------------------------------------

	$population = array("Dhaka" =>10, "Rajshahi" => 5, "Khulna"=> 12);
	$number      = 12;

	//echo array_search($number, $population);

	// ---------------------------------------------------


	$population = array("Dhaka" =>10, "Rajshahi" => 5, "Khulna"=> 12);

	$cities = array_keys($population);
	echo "<pre>";
	// print_r($cities);
	// ---------------------------------------------------
	$population = array("Dhaka" =>10, "Rajshahi" => 5, "Khulna"=> 12);
	$pops = array_values($population);

	// echo "<pre>";

	// print_r($pops);


	$population = array("Dhaka" =>10, "Rajshahi" => 5, "Khulna"=> 12);

	// echo sizeof($population);
	// -------------------------------------------------------



	$states = ["California", "Hawaii", "Ohio", "NewYork"];

	echo count($states);
	// -------------------------------------------------------
	echo "<hr>";
	$states = ["California", "Hawaii", "Ohio", "NewYork", "California"];

	print_r(array_count_values($states));
	echo "<hr>";
	echo "<br>";

	print_r($states);

		echo "<hr>";
	// -------------------------------------------------------
	$states = ["California", "Hawaii", "Ohio", "NewYork", "California"];

	$uniqestates = array_unique($states);

	print_r($uniqestates);

	// -------------------------------------------------------
	echo "<hr>";


	$number = array(10,25,344,54,588,47,9787,458);

	sort($number);


	print_r($number);

	$reversedArray = array_reverse($number);

	print_r($reversedArray);
?>