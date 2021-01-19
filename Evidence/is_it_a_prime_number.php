<form action="" method="post">
	<input type="text" name="number" placeholder="Type a number">
	<input type="submit" name="submit" value="submit">
</form>

<?

	$num 		= $_POST['number'];

	if ($num == 0 || $num == 1) 
	{
		echo "0 and 1 is not allowed";
	}
	elseif ($num == 2 || $num == 3 || $num == 5 || $num == 7 ) 
	{
		echo " $num is a prime number";
	}
	elseif (($num%2 !==0) && ($num%3 !==0) && ($num%5 !==0) && ($num%7 !== 0) ) 
	{
		echo " $num is a prime number";
	} 

?>