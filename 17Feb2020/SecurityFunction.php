

<?php

	$new = htmlspecialchars("<a href='test.html'>Test </a>", ENT_QUOTES);
	// echo $new;

?>

Trim Function 
<br>

<?php
	// echo "Before Something";
	// $hello = "            Hello something                ";
	// echo trim($hello);
	// echo "After Something"

?>


Strip Slashes Function 
<br>

<?php
	


$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);

?>