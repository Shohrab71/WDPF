
<?php

	
	echo "<pre>";
	$colors = array("a"=>"Red", "b"=>"Green" , "c"=>"Blue");
	print_r($colors);
	array_shift($colors);
	echo "<hr>";
	print_r($colors);
?>
