<?php

require_once('connectvars.php');
	
	$_SESSION['admin'];


	 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');	
	
	
	$result = mysqli_query($dbc, "SELECT id FROM test");

	

while ($row = mysqli_fetch_assoc($result)) { 
		
  $delid=$_GET['id'];
  mysqli_query($dbc,"DELETE FROM `test` WHERE `test`.`id` = $delid;");
  header('Location: admin.php'); // переадресовываем на главную страницу, что бы при нажатии F5 повторного удаления небыло

}
	mysqli_close($dbc);

	?>
