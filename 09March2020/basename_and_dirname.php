<?

	echo basename("/home/www/data/user.txt");

	echo "<br>";

	echo dirname("/home/www/data/user.txt");

	$info  = pathinfo("/home/www/data/user.txt");

	echo "<pre>";

	print_r($info);
?>