<?php
session_start();

if($_SESSION['admin']){
	
	header("Location: admin.php");
	exit;
}

require_once('connectvars.php');
 $dbc = mysqli_connect(db, root, root, test) or die('Error connecting to MySQL server.');
$query="SELECT * FROM admin";
$result = mysqli_query($dbc,$query);

while ($row = mysqli_fetch_array($result)){
      $admin = $row['login'];
		$pass=$row['password'];
}

 
if($_POST['submit']){
	if( $_POST['user']  ==  $admin  AND  sha1($_POST['pass']) ==
	 $pass ){
		$_SESSION['admin'] = $admin;
		setcookie('$admin',$admin,time()+3600);
		
		
		header("Location: admin.php");
		exit;
	}else echo '<p>Password or login is not correct</p>';
}
?>
<p> <a href="admin.php">ADMIN</a></p>
<hr>
<p>  To come in  <p>
<br />
<form method="post">
	Username: <input type="text" name="user" ><br>
	Password: <input type="password" name="pass" ><br>
	<input type="submit" name="submit" value="entrance">
</form>
<!--required -->
