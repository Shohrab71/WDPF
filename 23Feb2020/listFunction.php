<?

	$colors = array("Blue", "Red", "Green");

	list($color1,$color2,$color3) = $colors;

	echo $color2 . "<br>";



	function userInfo()
	{
		$user[] = "Abdul Kalam";
		$user[]	= "Dhaka";
		$user[] = "abdul@gmail.com";
		return $user;
	}

	list($name,$place,$email) = userInfo();

	echo "The name of the person is $name and his address is $place and his email is $email";
?>