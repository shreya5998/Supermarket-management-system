<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Login</title>
</head>
<body bgcolor='#E9967A' style="font-size:30px;">
<?php

	session_start();
   
        $query = 	"select product_name,count(*)
			from product pp,orderLineItem ll
			where pp.product_id=ll.product_id
			group by pp.product_id
			having count(*)>=ALL(	select count(*)
					     	from product p,orderLineItem l
						where p.product_id=l.product_id
						group by p.product_id);";


			echo "<br><br><br>";
			echo "<center><b><span style='font-size:40px;'>MOST SOLD PRODUCTS</span></b><br><br><table width='600' border='solid'>"; 
			 $result=pg_query($connection, $query);
					 echo "<tr><th>Product</th><th>Count</th></tr>"; 
					 
			
			 if (pg_num_rows($result)) 
			  {
			  
			  	while($rowA=pg_fetch_array($result, NULL, PGSQL_ASSOC)) 
			  	{
					 echo "<tr><th>".$rowA['product_name']."</th>";
			      		
					 echo "<th>".$rowA['count']."</th></th>";
			      		
			    
			    	}
			  }
			  echo "</table></center>";
  

        /*if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}*/
    //}else{
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
<!--<div class="form">
<h1>Employee Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<!--<p>Not registered yet? <a href='registration.php'>Register Here</a></p>-->


</body>
</html>
