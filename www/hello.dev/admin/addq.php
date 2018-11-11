	<?php 

require_once('connectvars.php'); 

$_SESSION['admin']; 

if($_POST['submit']){ 
$dbc = mysqli_connect("db", "root", "root", "test") or die('Error connecting to MySQL server.');
	
    
    
    
    
    
    
    
    
    
$Questions= $_POST['q'];
$answer1=$_POST['1q'];
	
$answer2=$_POST['2q'];
	
$answer3=$_POST['3q'];
$answer4=$_POST['4q'];
$correctanswer=$_POST['a'];

mysqli_query($dbc, "INSERT INTO `test` (`id`, `Questions`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`) VALUES (NULL, '$Questions', '$answer1', '$answer2', '$answer3', '$answer4', '$correctanswer')");
mysqli_close($dbc); 
}

echo' 
<p>Record successfully added</p>
<a href="admin.php">Home</a>

';


exit;
?>
