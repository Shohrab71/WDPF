

<?

	$states = [
		"Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
		"Nebraska" => array("population" => "5000000", "capital" => "Omaha")
			  ];

	//echo $states["Nebraska"]["capital"];

?>
<?

	//echo $states["Nebraska"]["population"];
?>




<?

	$players = [

				"Bangladesh" => array("Chittagong"=>"Tamim","Magura"=>"Sakib","Bogura"=>"Mushfiq"),
				"India" => array("Nagpur"=>"Virat","Mumbai"=>"Sachin","Chennai"=>"Dhoni"),
				"Australia" => array("Sydny"=>"Watson","Melbourn"=>"Smith","Wall street"=>"Ponting"),

			   ];


	//echo $players["Bangladesh"]["Magura"];

?>

<?
$flowers = array();

$flowers[0]= "Rose";
$flowers[1]= "Marigold";
$flowers[2]= "Sunflower";
$flowers[]= "Tulip";
$flowers[]= "Daffodil";
$flowers[]= "Jasmin";


// echo "<pre>";
// print_r($flowers);
echo count($flowers);
?>
<!-- => means arrow notation -->