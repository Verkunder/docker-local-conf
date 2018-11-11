
<?php
$dbc = mysqli_connect("db","root","root","test") or die('Error connecting to MySQL server.');
$query="SELECT id, Questions, answer1, answer2, answer3, answer4, correctanswer FROM test";
mysqli_set_charset($dbc,"utf-8");
 $query="SELECT id,correctanswer FROM test";
  $result= mysqli_query($dbc,$query)
      or die('Error querying database');

  $arr_correct=array();
  while ($row=mysqli_fetch_assoc($result)) {
      $arr_correct[$row['id']]=(int)$row['correctanswer'];
  }

  mysqli_close($dbc);

  $kol=0;
  $total = mysqli_num_rows($result);
  for ($i=1;$i<=$total;$i++)
  {
      if(!isset($_POST['st'.$i]))
          continue;
      if($arr_correct[$i]==$_POST['st'.$i])
      {
          $kol++;
      }
  }
  echo "The number of correct answers $kol out of 3";
  ?>