<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>


<!DOCTYPE html>
<html>
<head>
<style>
body{
	
	font-family: "Comic Sans MS", cursive, sans-serif;
	
	background-image:url("offers.png") ;
	font-size:20px;
	height:auto;
    	width:auto;
	background-size:100%;
	background-attachment: fixed;
}

td,th{width:200px;height:30px;text-align:center;font-size:30px;}
</style>
<title>Available offers</title>
</head>

<body>
<table id='table1'  >
<?php

	session_start();
  
	echo "<span style='background-color:red;font-size:50px;margin-left:50px;'>Least sold products<span>"."<br><br>";
	$query1="select product_name,count(*),unit_price
		from product pp,orderLineItem ll
		where pp.product_id=ll.product_id
		group by pp.product_id
		having count(*)<=ALL(	select count(*)
					from product p,orderLineItem l
					where p.product_id=l.product_id
					group by p.product_id);";



	$result1=pg_query($connection, $query1);


               
	
 	if (pg_num_rows($result1)) 
  	{
  		
	  	
	  	while($rowA=pg_fetch_array($result1, NULL, PGSQL_ASSOC)) 
	  	{
	  		
	      		 //echo $rowA['product_name']."  ".$rowA['count']."  ".$rowA['unit_price']."  ";
	      		  echo "<tr><td>".$rowA['product_name']."</td><td>".$rowA['count']."</td><td>".$rowA['unit_price']."</td></tr>";
	
	      		 	
	    	}
	    	
  	}
echo "</table>";	


$query2="update orderLineItem
	set amount=0.75*amount
	where orderLineItem.product_id in(select product.product_id
					from product ,orderLineItem 
					where product.product_id=orderLineItem.product_id
					group by product.product_id
					having count(*)<=ALL(	select count(*)
								from product p,orderLineItem l,category c
								where p.product_id=l.product_id and p.cat_id=c.cat_id
								group by p.product_id);";


/*$query2 = "update offer
set discount=0.05
where offer_id in(select o.offer_id
from product o,category cc
where cc.cat_id=o.cat_id and o.cat_id in(select c.cat_id
from product p,orderLineItem l,category c
where p.product_id=l.product_id and p.cat_id=c.cat_id
group by c.cat_id
having count(*)<=ALL(select count(*)
from product p,orderLineItem l,category c
where p.product_id=l.product_id and p.cat_id=c.cat_id
group by c.cat_id))
group by cc.cat_name,o.cat_id,o.offer_id)";*/
/*
$result2=pg_query($connection, $query2);


if (!($result2)) 
{
   echo "query did not execute";
 }
  else
	echo "done";

        
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
   
  $query3="select count(*) as count
from product pp,orderLineItem ll
where pp.product_id=ll.product_id
group by pp.product_id
having count(*)<=ALL(	select count(*)
		     	from product p,orderLineItem l
			where p.product_id=l.product_id
			group by p.product_id);";



$result3=pg_query($connection, $query3);


               

 if (pg_num_rows($result3)) 
  {
  	echo "<br>"; 
  	while($rowA=pg_fetch_array($result3, NULL, PGSQL_ASSOC)) {
                 
                
      		 echo $rowA['count']."  ";

      		 echo '<br>';		
      		
    	}
  }*/
?>


</body>
</html>
