<?

		// $score = (string) 13.05;


		// echo $score;
		// echo "<br>";


		// var_dump($score);


		// $score = (double) 13.05;


		// echo $score;
		// echo "<br>";


		// var_dump($score);


		// $score = (float) 13.05;


		// echo $score;
		// echo "<br>";


		// var_dump($score);


		// $score = (int) 13.05;


		// echo $score;
		// echo "<br>";


		// var_dump($score);


		// $score = (int) "This is a senternce";


		// echo $score;
		// echo "<br>";


		// var_dump($score);


		// $score = (int) "87This is a senternce";


		// echo $score;
		// echo "<br>";


		// var_dump($score);



		// $score = (int) "This is a senternce87";


		// echo $score;
		// echo "<br>";


		// var_dump($score);
	


	$score = 1114;

	$scoreboard = (array) $score;


	echo $scoreboard;

	echo "<br>";


$score = 1114;

	$scoreboard = (array) $score;
	$scoreboard[1]=500;

	echo $scoreboard[0];

	echo "<br>";
	var_dump($scoreboard);
	echo "<br>";
	echo "<pre>";
	print_r($scoreboard);	
	echo "<pre>";
	$model = "Toyota";
	$obj   = (object) $model;

	echo $obj-> scalar;

?>