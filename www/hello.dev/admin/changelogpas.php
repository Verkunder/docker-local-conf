	
		<?php
	require_once('connectvars.php');
	
	$_SESSION['admin'];
	if($_POST['submit']){ 
	 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');	
$nlog=$_POST['nlog'];
	$npas=$_POST['npas'];

		




	
	mysqli_query($dbc,"UPDATE admin SET login='$nlog',password=SHA('$npas')  WHERE id=1");
	


		mysqli_close($dbc);
		
	}



	
	?>