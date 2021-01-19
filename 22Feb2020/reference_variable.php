
<h1>General Variable</h1>
<?

	$value1 = "Hello";
    $value2 = $value1;
    $value2 = "Goodbye"; 

    echo $value1;
    echo "<br>";
    echo $value2;


?>

<h1>Reference Variable</h1>


<?
	
	$value1 = "Hello";
    $value2 =& $value1;
    $value2 = "Donald Trump";
    $value2 = "Bangladesh";
    echo $value1;
    echo "<br>";
    echo $value2;


?>