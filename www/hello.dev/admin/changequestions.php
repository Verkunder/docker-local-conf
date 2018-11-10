

<?php 

require_once('connectvars.php'); 

$_SESSION['admin']; 


$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.'); 

$idd=$_GET['id']; 
$result = mysqli_query($dbc, "SELECT * FROM test WHERE id=$idd");



while ($row = mysqli_fetch_assoc($result)) { 
$quest=$row['quest'];
	$i=$row['id'];
echo " 
$i
<form action='aq.php' method='post'>  
<input type='text' name='q' value=' ".$row['Questions']." ' /> вопрос<br/>
<input type='text' name='1q' value=' ".$row['answer1']." ' /> 1ответ<br/>
<input type='text' name='2q' value=' ".$row['answer2']." ' /> 2ответ<br/>
<input type='text' name='3q' value=' ".$row['answer3']." ' /> 3ответ<br/>
<input type='text' name='4q' value=' ".$row['answer4']." ' /> 4ответ<br/>
<input type='text' name='a' value=' ".$row['correctanswer']." ' /> ответ<br/>

<input type='submit' name='submit' value='to change'>
</form>

";
	
	
	



} 
mysqli_close($dbc); 

?> 

