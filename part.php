<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Consumers</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	
	session_start();
   
   	 if (isset($_POST['pname'])){
		
		$pname= $_REQUEST['pname']; // removes backslashes
		
               $result=pg_query($connection, "select c.cust_name
from customer c,OrderPlaced o,orderLineItem l,product p,category t
where c.cust_id=o.cust_id and o.ord_id=l.order_id and l.product_id=p.product_id and p.cat_id=t.cat_id and t.cat_name='$pname'");
 //$result=pg_query($connection, $query);
if (pg_num_rows($result)) 
  {
  	while($rowA=pg_fetch_array($result, NULL, PGSQL_ASSOC)) {

      		 echo $rowA['cust_name']."  ";
      		 //echo $rowA['tot_amt'];
      		 echo '<br>';	
      		
    	}
      		
    	}
   else
         echo "Enter valid data";
  

        /*if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}*/
    }else{
 //if  (!$result) {
   //echo "query did not execute";
  //}
  //else
	//echo "done";
        //echo '<br>'; 
/*else
         echo "Username or password is invalid";
		//$result = mysqli_query($con,$query) or die(mysql_error());
		/*$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{*/
?>
<div class="form">
<h1>Consumers</h1>
<form action="" method="post" name="login">
<input type="text" name="pname" placeholder="Enter Product Category" required />
<!--<input type="password" name="password" placeholder="Password" required />-->
<input name="submit" type="submit" value="View" />
</form>
<!--<p>Not registered yet? <a href='registration.php'>Register Here</a></p>-->

<br /><br />

</div>
<?php } ?>


</body>
</html>
