<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Array in Php</title>
</head>
<body>
	<?php
		$fruits = array("Apple", "Mango", "Orange","Grape");
	?>

	<div class="container">
		
		<h2>Fruit List</h2>
		<div class="list-group">
			<?php
			for($i = 0; $i<count($fruits); $i++){
			?>

			<a href="#" class="list-group-item"><?php echo $fruits[$i];?></a>

			<?php } ?>
			
		</div>

	</div> <!-- Container -->
</body>
</html>