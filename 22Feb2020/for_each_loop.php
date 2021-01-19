

<?
	$links = array("The Apache Web Server" => "www.apache.org","Appress" => "www.apress.com","The PHP Scripting Language" => "www.php.net");



	foreach($links as $flink => $value) 
	{
 		?>
		<a href="http://<?php echo $value; ?>"><? echo $flink;?></a> <br>

  <?	}?>
