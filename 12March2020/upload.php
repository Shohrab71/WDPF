<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="" enctype="multipart/form-data"
method="post">
 <label form="name">Name:</label><br>
 <input type="text" name="name" value=""><br>
 <label form="email">Email:</label><br>
 <input type="text" name="email" value=""><br>
 <label form="homework">Class notes:</label>
 <input type="file" name="homework" value=""><br>
 <input type="submit" name="submit" value="Submit Homework">
</form>


<?

	if (isset($_POST['submit'])) 

	{
		// echo "<pre>";
		// print_r($_FILES);

		$name 	= $_FILES['homework']['name'];
		$ext 		= pathinfo($name,PATHINFO_EXTENSION);
		$ext 	 	= strtolower($ext);
		$allowedtype= array("jpg","png","jpeg");
		$tmpName 	= $_FILES['homework']['tmp_name'];
		$size		= $_FILES['homework']['size'];
		$ok			= false;
		$msg		= array();


		if ($size>204800) 
		{
			$msg[]	= "File size more than 200Kb is not allowed";
			$ok 	= false;

		}

		elseif (!in_array($ext, $allowedtype)) 
		{
			$ok 	= false;
			$msg[]	= "File must be jpg, png or jpeg";
		}
		else
		{
			$ok 	= true;
		} 


		if ($ok && is_uploaded_file($_FILES['homework']['tmp_name'])) 
			{
				move_uploaded_file($tmpName, "uploads/". $name);

				echo "File uploaded successfully <br>";
				echo "<img src='uploads/$name' height=100px; width=100px;>";
			}
		else
		{
			echo "<h2>Sorry, File can't be uploaded</h2>";
			foreach ($msg as $err) {
				echo "$err <br>";
			}
		}

		
	} //issest closing


?>
</body>
</html>