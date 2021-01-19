<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	<div class="container">
	<div class="form-group">
	<form action="" method="post">
		
		<input type="number" name="guess" placeholder="Guess a number" class="form-control">
		<br>
		<input type="submit" name="submit" value="submit" class="btn btn-primary">

	</form>
	</div>
	</div>

	<?php
	

	if (isset($_POST['submit'])&& !empty($_POST['guess'])) {
		# code...
	
	
	$secretNumber = 453;
 	if ($_POST['guess'] == $secretNumber) 
 	{
 	echo "Congratulations!";
 	} elseif (abs ($_POST['guess'] - $secretNumber) < 10) 
 	{
	 echo "You're getting close!";
 	} else 
 	{
 	echo "Sorry!";
    }
};
?>
</body>
</html>