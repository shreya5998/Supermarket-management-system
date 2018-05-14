<?php
if (!$connection = pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052")) {
    $error = error_get_last();
  // echo "Connection failed. Error was: ". $error['message']. "\n";
} //else {
    //echo "Connection successful.\n";
    //echo "<br>";
//}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>bill</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	
	session_start();
        $cust_id=$_POST['cust_id'];
        $cust_name=$_POST['cust_name'];
        $add_amt=$_POST['subtotal'];
        $query = "update customer
set tot_amt=tot_amt+$add_amt where cust_id='$cust_id'";
$query2="Select tot_amt from customer where cust_id='$cust_id'";
$result=pg_query($connection, $query);
$result2=pg_query($connection, $query2);
 if  (!$result) {
   echo "query1 did not execute";
  }
  else
	echo "Total amount has been updated for $cust_id $cust_name";
        echo '<br>';

if  (!$result2) {
   echo "query2 did not execute";
  }
  else
	echo "Total_amount is:";
if (pg_num_rows($result2)) 
  {
  	while($rowA=pg_fetch_array($result2, NULL, PGSQL_ASSOC)) {
                 
                
      		 echo $rowA['tot_amt']."  ";
      		
                // echo $rowA['count'];
      		 //echo '<br>';
      			
      		
    	}
  }


 

       
?>


</body>
</html>
