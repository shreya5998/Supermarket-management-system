<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>


<!DOCTYPE html>
<html>
<head>

<title>Customer Registration</title>
<style>
body{
	
	background-image:url("reg.png") ;
	background-repeat: no-repeat;
	height:auto;
    	width:auto;
	background-size:100%;
	background-attachment: fixed;
	font-size:30px;
	
}
	input{width:300px;height:40px;text-align:center;
	 	border-bottom-right-radius: 2.5em;
		border-bottom-left-radius: 2.5em;
		border-top-right-radius: 2.5em;
		border-top-left-radius: 2.5em;
	
	
			box-shadow: 30px 10px 50px 	#696969;
		-moz-box-shadow: 30px 10px 50px 	#696969;
		-webkit-box-shadow: 30px 10px 50px 	#696969;
		-khtml-box-shadow: 30px 10px 50px 	#696969;
	}
 	
 	input:hover,button:hover{
		 opacity: .8;
		
	-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
		
	
}

</style>
</head>
<body  >
<?php
	
    if (isset($_REQUEST['cust_id']))
    {
		$cust_id   = stripslashes($_REQUEST['cust_id']);
                $cust_name = stripslashes($_REQUEST['cust_name']); // removes backslashes
                $phoneNum  = stripslashes($_REQUEST['phoneNum']);
		
		$emailId = stripslashes($_REQUEST['emailId']);
                $address = stripslashes($_REQUEST['address']);
		
	        $tot_amt = stripslashes($_REQUEST['tot_amt']);

		
      		$query = "INSERT INTO customer VALUES ('$cust_id', '$cust_name', $phoneNum,'$emailId', '$address',$tot_amt)";
        
        	$result=pg_query($connection, $query);
 		if  (!$result) 
 		{
   			echo "Choose another Customer ID";
 		 }
 		 else
 		 {
			echo "<script>alert('Successfully Registered')</script>";
			
			echo "<script>window.location.href='/dbms/billing.php';</script>";
			
		}	
		echo '<br>';
	       
    }
    else
    {
	?>
	<div class="form">
	<h1>Customer Registration</h1>
	<center>
	<form name="registration" action="" method="post"><br><br>
	<input type="text" name="cust_id" placeholder="Customer ID" required /><br><br>
	<input type="text" name="cust_name" placeholder="Customer Name" required /><br><br>
	<input type="number" name="phoneNum" placeholder="Phone" required /><br><br>
	<input type="email" name="emailId" placeholder="Email" required /><br><br>
	<input type="text" name="address" placeholder="Address" required /><br><br>
	<input type="text" name="tot_amt" placeholder="Amount" required /><br><br>
	<input type="submit" name="submit" value="Register" /><br>
	</form>
	</center>
	<br /><br />

	</div>
	<?php 
    } 
?>
</body>
</html>
