<?

	$fh		= fopen("files/users.txt", "r");


	while (!feof($fh))

		{
		
		echo fgets($fh);

		echo "<br>";
		
		}

	fclose($fh);
?>