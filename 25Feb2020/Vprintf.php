<?
	$customers =array();

	$customers[]= array("Rahim", "rahim@gmail.com","01725487441");
	$customers[]= array("Pani", "pani@gmail.com","01727236045");
	$customers[]= array("Kabir", "kabir@gmail.com","015887844");
	

	foreach ($customers as $customer) 
	{
		vprintf("customer name : %s  <br>customer email :%s <br> customer mobile no : %s <br> ", $customer);
	}



?>