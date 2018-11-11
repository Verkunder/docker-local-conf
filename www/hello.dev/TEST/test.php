<html>
<head>
    <meta charset="utf-8">





</head>

<body>


<form action="answer.php" method="post" name="Questions"  >



    <?php
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');
    $query="SELECT id, Questions,answer1,answer2,answer3,answer4,correctanswer";

    $result = mysqli_query($dbc, "SELECT * FROM test ORDER BY rand() LIMIT 3");



    while ($row = mysqli_fetch_assoc($result)) {
        echo '  
    
    <div name="set_quest">
    <b><i>'.$row['Questions'].'</i></b>
    <ul>
    <li><input id="che" type="radio"  value="1" name="st'.$row['id'].'" onchange="check();"  /> '.$row['answer1'].' </li> 
    <li><input id="che" type="radio"  value="2" name="st'.$row['id'].'" onchange="check();"  /> '.$row['answer2'].' </li> 
    <li><input id="che" type="radio"   value="3" name="st'.$row['id'].'" onchange="check();" /> '.$row['answer3'].' </li> 
    <li><input id="che" type="radio"   value="4" name="st'.$row['id'].'" onchange="check();" /> '.$row['answer4'].' </li> 
   
        
        </div>
        ' ;

    }


    mysqli_close($dbc);


    ?>
    <input  type="submit" id="knopka" value="Check"   name="submit"  />

    <script type="text/javascript">
        function check() {
            var top1= document.getElementsByName('st')[0],
                top2= document.getElementsByName('st')[1],
                top3= document.getElementsByName('st')[2],
                top4= document.getElementsByName('st')[3],
                submit = document.getElementsByName('submit')[0];
            if (top1.checked  &&  top2.checked  &&  top3.checked &&  top4.checked  )
                submit.disabled = ' ';
            else submit.disabled = 'disabled';
        }
    </script>




</form>





</body>






</html>
