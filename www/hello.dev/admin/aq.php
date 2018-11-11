	<?php 

require_once('connectvars.php'); 

$_SESSION['admin']; 

if($_POST['submit']){ 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.'); 
$id=$_POST['id'];
$Questions= $_POST['q'];
$answer1=$_POST['1q'];
	
$answer2=$_POST['2q'];
	
$answer3=$_POST['3q'];
$answer4=$_POST['4q'];
$correctanswer=$_POST['a'];
echo"$id" ;
mysqli_query($dbc, "UPDATE test SET Questions='$Questions',answer1='$answer1',answer2='$answer2', answer3='$answer3', answer4='$answer4', correctanswer='$correctanswer' WHERE id='$id'");
 
}
mysqli_close($dbc);
echo' 
<p>Record successfully changed</p>
<a href="admin.php">home</a>

';


exit;
?>
