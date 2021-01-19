

<?

	$title = "My Article tiltle";
	$body = "My Article body";
	$footer ="This is my Footer";


$article = <<<DEF
		
		<h1>$title</h1>
		
		<p>$body</p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel unde inventore alias explicabo pariatur obcaecati quas, aliquid, dicta. Doloribus nemo consequuntur eaque provident rem quibusdam nostrum, dolorum modi.

		<p>$footer</p>

DEF;


	echo $article;

?>
