<?php
//echo "$_POST[bookid]";
$db = pg_connect("host=localhost dbname=dbms user=one password=one")
 or die("Can't connect to database".pg_last_error());
echo "Hello";
//$query = "<br>SELECT question_id,question_string FROM question where question_id='$_POST[bookid]'";
 //$result = pg_exec($db, $query) ;
 //echo  pg_numrows($result);


 /*for($row =0;$row< pg_numrows($result);$row++)
 {
 	$values = pg_fetch_row($result,$row);
 	$fullname = "";
 	for($col = 0; $col < count($values); $col++)
 	{
 		$fullname .= $values[$col]." ";
 	}
 	echo " $fullname<br>";
 }
 
  pg_freeresult($result);*/
 pg_close($db);
?>
