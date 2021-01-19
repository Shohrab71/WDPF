

<?

	$array1  = array("Dhaka","Norshingdi","Manikganj","Narayanganj","Munshiganj","Cumilla");
	$array2  = array("Dhaka","Norshingdi","Manikganj","Narayanganj","Munshiganj");
	$array3  = array("Dhaka","Norshingdi","Manikganj","Narayanganj","Munshiganj");

	$diff    = array_diff($array1,$array2,$array3);

	print_r($diff);

?>