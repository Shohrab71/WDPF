<?php
	
	$host		= "localhost";
	$user		= "root";
	$pass		= "";
	$db 		= "wdpf44";
	$con 		= mysqli_connect($host,$user,$pass,$db);



	if(!$con)
		{
			die("Something problem with connection and database selection");
		};


?>




