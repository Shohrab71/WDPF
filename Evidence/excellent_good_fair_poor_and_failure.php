
write a programme which you input A,B,C,D and F and output will be shown excellent, good, fair ,poor and failure.

<form action="" method="post">
	<input type="text" name="catagory" placeholder="Type an alphabet">
	<input type="submit" name="submit" value="submit">
</form>
<?
	if (isset($_POST['submit'])) 
{
		
	
	$cat 	= $_POST['catagory'];
	
	switch ($cat) {
		case 'a':
			echo "Excellent";
			break;
		
		case 'b':
			echo "Good";
			break;
		case 'c':
			echo "Fair";
			break;
		case 'd':
			echo "poor";
			break;
		case 'f':
			echo "Fail";
			break;
		default:
			echo "Enter a correct Value";
			
	}

};

?>
