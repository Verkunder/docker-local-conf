<?php
require "auth.php";
?>
<html>

<head>
	<style>
	
		.exit{
			margin-top: 10px;
			
		}
		#hider {
    position: absolute;
    top: -9999px;
    left: -9999px;
}
#hider:checked + .content {
    display: block;
}
#clickme {
    text-decoration: underline;
    color: blue;
    cursor: pointer;
}

.content {
    margin-top: 10px;
    display: none;
	border:1px solid;

            width:204px;
            height:200px;
}
 input[type="password"]::-ms-reveal {
    background: #c00;
    color: #fff;
   }
	</style>
	
	
	</head>



<body> 
	<script>
		function ShowHidePassword(id) {
element = document.getElementById(id);
if (element.type == 'password') {
/*element.type = 'text';
element.value = element.value;*/
var inp = document.createElement("input");
inp.id = id;
inp.type = "text";
inp.value = element.value;
//alert(inp.parentNode.tagName);
element.parentNode.replaceChild(inp, element);
}
else {
/*element.type = 'password';
element.value = element.value;*/
var inp = document.createElement("input");
inp.id = id;
inp.type = "password";
inp.value = element.value;
element.parentNode.replaceChild(inp, element);
}
}
		
	function confirmDelete() {
    if (confirm("Do you confirm deletion?")) {
        return true;
    } else {
        return false;
    }
}
			

		
	
	</script>

	
	<?php 
require_once('connectvars.php');
 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');
$query="SELECT id, Questions, answer1, answer2, answer3, answer4, correctanswer FROM test";

$result = mysqli_query($dbc, "SELECT * FROM test");

	

while ($row = mysqli_fetch_assoc($result)) { 
	echo '  
    <form name="dca" action="changequestions.php" method="post">
    <div name="set_quest">
    <b><i>'.$row['Questions'].'</i></b>
    <ul>
		 <li><input id="che" type="text" value="'.$row['Questions'].'"  name="st'.$row['Questions'].'"  " />
    <li><input id="che" type="text" value="'.$row['answer1'].'"  name="st'.$row['id'].'"  " />  </li> 
    <li><input id="che" type="text"  value="'.$row['answer2'].'" name="st'.$row['id'].'"    </li> 
    <li><input id="che" type="text"   value="'.$row['answer3'].'" name="st'.$row['id'].'"  />  </li> 
    <li><input id="che" type="text"   value="'.$row['answer4'].'" name="st'.$row['id'].'"  /></li> 
	<li><input id="che" type="text"   value="'.$row['correctanswer'].'" name="st'.$row['id'].'"  /> answer number  </li> 
       <a href="delete.php?id='.$row['id'].'" onclick="return confirmDelete();">Delete</a>
	     <a href="changequestions.php?id='.$row['id'].'" ">Change</a>
        </div>
		</form>
        ';

		}
  mysqli_close($dbc);

?>
	
	
	
	
	
	
	
	
	
	<form  action="changelogpas.php" method="post">
		
<label class="link" for="hider" id="clickme">Change Password</label>
<input type="checkbox" id="hider">
<div class="content">
	<p>login</p><input type="text" name="nlog" id="nlog">
	<p>password</p><input type="password"  name="npas" id="pid"> <a href="#" onclick="ShowHidePassword('pid')">click</a>
	<input type="submit" name="submit" value="Change">
	</div>
		</form>
	<br>

<a href="aoao.php">Add a question</a>
	

<a href="admin.php?do=logout"><input type="button" class="exit" value="output"></a>
	
	
	</body>
</html>