<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Login</title>
<link rel="stylesheet" href="css/style.css" />
<style>
	#display
	{
		test-align:center:
		
	}
	
	body{
	
	background-image:url("cust_det.png") ;
	background-repeat: no-repeat;
	height:auto;
	    width:auto;
	    font-size:40px;
	background-size:100%;
	background-attachment: fixed;
}


</style>

</head>
<body>
<br><br><br>
<?php
	;
	session_start();
   
    	if (isset($_POST['phoneNum'])){
		
		$phnum = stripslashes($_REQUEST['phoneNum']); // removes backslashes
	
                $query = "SELECT * FROM customer WHERE phoneNum='$_POST[phoneNum]'";
		
         	$result=pg_query($connection, $query);

  		if (pg_num_rows($result)) 
  		{
  			while($rowA=pg_fetch_array($result, NULL, PGSQL_ASSOC)) 
  			{
  				
  				echo "<center><div id='display'>";
				 echo "Customer ID";
				 echo ":";
				 echo $rowA['cust_id'];
				 echo '<br>';
				 echo "Customer Name";
				 echo ":";
		      		 echo $rowA['cust_name'];
		      		 echo '<br>';
				 echo "Phone Number";
				 echo ":";
				 echo $rowA['phonenum'];
		      		 echo '<br>';
				 echo "Email ID";
				 echo ":";
				 echo $rowA['emailid'];
		      		 echo '<br>';
				 echo "Address";
				 echo ":";
				 echo $rowA['address'];
		      		 echo '<br>';
				 echo "Total Amount";
				 echo ":";
				 echo $rowA['tot_amt'];
		      		 echo '<br>'; 
		       		echo "</div></center>";
                
      		
    			}
   
	  	}
	else
         	echo "Username is invalid";
        
   	 }
   	 else
   	 {
		?>
		<div class="form">
		<h1>Customer Log In</h1>
		<form action="" method="post" name="login">
		<input type="text" name="phoneNum" placeholder="Phone Number" required />
		<!--<input type="password" name="password" placeholder="Password" required />-->
		<input name="submit" type="submit" value="View Details" />
		</form>
		<p>Not registered yet? <a href='cust_reg.php'>Register Here</a></p>

		<br /><br />

		</div>
		<?php
	 }
 ?>


</body>
</html>

