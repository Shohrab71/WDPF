<?

	$users	= file("files/users1.txt");

	foreach ($users as $user) {

		list($name,$email) = explode(",",$user);?>
	
	<a href="mail to:<?echo $email ?>"><?echo $name ?></a>
	<br>
		
	
	<?
	//echo $name." ".$email. "<br>";
	}
	?>




