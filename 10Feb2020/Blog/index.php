<?php
	include("includes/header.php");
?>

<? include("includes/navbar.php");?>

<div class="container-fluid text-center">    
  <div class="row content">

<? include("includes/sidebar.php");?>
<div class="col-sm-8 text-left"> 


	  <?php 

	  	$number = array(10,15,25);
	  	$fruits = array("Apple","Orange","Grape");

	  	//Associative array

	  	$students = array("Amena"=>80, "Rubel"=>82, "Shohrab"=>85); ?>

	  	<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>Marks</th>
		</tr>
	  <?php 
	  	foreach($students as $name=>$marks)
	  	{
	  		echo "<tr>";
	  		echo "<td>" . $name ."</td>". "<td>" . $marks. "</td>";
	  		echo "<tr>";
	  	}
	  ?>

	  </table>
	
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore sapiente sequi possimus tenetur. </p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
<? include("includes/rightbar.php");?>

</div>
</div>

<? include("includes/footer.php");?>

 



