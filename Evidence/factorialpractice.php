
<?

	if (isset($_POST["submit"]))
{
	
	$x	= $_POST["x"];

	function factorial($n)
		{
			if ($n===0) 
			{
				return 1;
			}

			return $n*factorial($n-1);

		}

		echo factorial($x);
}

?>


<form action="" method="post">
	
	<input type="text" name="x" placeholder="type a number"> <br>
	<input type="submit" name="submit" value="submit">

</form>