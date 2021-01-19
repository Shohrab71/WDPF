<?

	$file	= "stat.php";

	printf("File last accessed : %s", date("m-d-y g:i:sa",fileatime($file)));

?>