	<?php 

require_once('connectvars.php'); 

$_SESSION['admin']; 

if($_POST['submit']){ 
$dbc = mysqli_connect("db", "root", "root", "test") or die('Error connecting to MySQL server.');
	
    
    
    
    
    
    
    
    
    
$quest= $_POST['q'];
$first_answer=$_POST['1q'];
	
$second_answer=$_POST['2q'];
	
$third_answer=$_POST['3q'];	
$four_answer=$_POST['4q'];
$answer=$_POST['a'];

mysqli_query($dbc, "INSERT INTO `test` (`id`, `Questions`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`) VALUES (NULL, '$Questions', '$answer1', '$answer2', '$answer3', '$answer4', '$correctanswer')");
mysqli_close($dbc); 
}

echo' 
<p>Record successfully added</p>
<a href="admin.php">Home</a>

';


exit;
?>
