<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

		$news = array(
			"News Title 1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur quis aliquam numquam voluptates deserunt ad, fugiat corporis recusandae laborum animi debitis illum? Fuga cupiditate neque laborum optio. Velit, iure.",
			"News Title 2" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur quis aliquam numquam voluptates deserunt ad, fugiat corporis recusandae laborum animi debitis illum? Fuga cupiditate neque laborum optio. Velit, iure.",
			"News Title 3" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur quis aliquam numquam voluptates deserunt ad, fugiat corporis recusandae laborum animi debitis illum? Fuga cupiditate neque laborum optio. Velit, iure.",
			"News Title 4" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur quis aliquam numquam voluptates deserunt ad, fugiat corporis recusandae laborum animi debitis illum? Fuga cupiditate neque laborum optio. Velit, iure.",


			 );
	?>

	<?php

	foreach ($news as $title => $body) 
	{
		echo "<h2>$title</h2>";
		echo "<p>$body</p>";
		echo "<hr>";
	}

	?>

</body>
</html>