<?

	$info     	= "J. Gilmore:jason@example.com|Colombus,Ohio";

	$tokenize 	= ":|,";

	$tokenized  = strtok($info, $tokenize);


	while ($tokenized) {
		echo "Element = $tokenized<br>";

		$tokenized = strtok($tokenize);
	}


?>