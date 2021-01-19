<?
	
	$users = file("user.txt");

?>

<table border="1px">
	<tr>
		<th>SN</th>
		<th>Name</th>
		<th>Area</th>
		<th>District</th>
	</tr>
	
<?
	$id = 1;
	foreach($users as $user)
	{
		$userlist = explode("|", $user);

		list($name, $area, $district) = $userlist;
	
?>
	<tr>
		<td><? echo $id ?></td>
		<td><? echo $name ?> </td>
		<td><? echo $area ?> </td>
		<td><? echo $district ?> </td>
		
		
	</tr>

	
	<? $id++;} ?>

</table>