
<?php

	
	echo "<pre>";
	$colors = array("a"=>"Red", "b"=>"Green" , "c"=>"Blue");
	print_r($colors);
	
	echo "<hr>";
	array_unshift($colors, "Tomatoo");
	print_r($colors);
?>
