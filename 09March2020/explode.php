<?

	$summery        =  <<<pot
	The most up to date source for php dodumentation is the php manual. 
	It contains many examples and user contributed code and comments. 

	pot;


	$allwords       = (explode(' ',strip_tags($summery)));

	echo "<pre>";

	print_r($allwords);

?>