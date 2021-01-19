<?

	$users		= file_get_contents("../09March2020/files/users1.txt");


	// echo "<pre>";
	// print_r($users);

	$usersArray	= explode("\n", $users);

	foreach ($usersArray as $user) {

		list($name,$email) = explode(",", $user);

		echo "Name    : ".$name . "Email    : " .$email. "<br>";

	}
	

	// echo $name;
	// echo $email;

	// echo "<pre>";
	// print_r($usersArray);


?>
