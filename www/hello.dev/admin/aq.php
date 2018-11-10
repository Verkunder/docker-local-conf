	<?php 

require_once('connectvars.php'); 

$_SESSION['admin']; 

if($_POST['submit']){ 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.'); 
$idd=$_POST['idd'];
$quest= $_POST['q']; 
$first_answer=$_POST['1q'];
	
$second_answer=$_POST['2q'];
	
$third_answer=$_POST['3q'];	
$four_answer=$_POST['4q'];
$answer=$_POST['a'];
echo"$idd" ;
mysqli_query($dbc, "UPDATE test SET Questions='$Questions',answer1='$answer1',answer2='$answer2', answer3='$answer3', answer4='$answer4', correctanswer='$correctanswer' WHERE id='$idd'");
 
}
mysqli_close($dbc);
echo' 
<p>Record successfully changed</p>
<a href="admin.php">home</a>

';


exit;
?>
