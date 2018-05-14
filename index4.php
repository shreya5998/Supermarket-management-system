<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Bill</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<!--<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>-->

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">BILL</textarea>
		
		<div id="identity">
		
     
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Name</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">2018-04-24</textarea></td>
                </tr>
               

            </table>
		
		</div>
		<form action="bill_f2.php" method="post">
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Category</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		    <tr class="item-row" >
		      <td class="item-name"><div class="delete-wpr"><textarea name="item1"><?php

$item1=$_POST['item1'];
echo $item1; ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category1"><?php
$category1=$_POST['category1']; echo $category1; ?></textarea></td>
		      <td><textarea class="cost" name="cost1"><?php
if (!$connection = pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052")) {
    $error = error_get_last();
   echo "Connection failed. Error was: ". $error['message']. "\n";
} 
$result=pg_query($connection, "Select unit_price from product where product_name='$item1'");
	if  (!$result) {
  // echo "Employee doesnt exists";
  }
 
  if (pg_num_rows($result)) 
  {
  	while($rowA=pg_fetch_array($result, NULL, PGSQL_ASSOC)) {
      		echo $rowA['unit_price'];
      		//echo "<br>";
      			
      		
    	}
  }
?></textarea></td>
		      <td><textarea class="qty" name="qty1"><?php
$qty1=$_POST['qty1']; echo $qty1?></textarea></td>
		      <td><span class="price" name="price1"><?php 

$cost1=$_POST['cost1'];
$qty1=$_POST['qty1'];
$price1=$cost1*$qty1;
echo $price1;?></span></td>
		  </tr>


 <tr class="item-row" >
 <td class="item-name"><div class="delete-wpr"><textarea name="item2"><?php
$item2=$_POST['item2'];
echo $item2; ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category2"><?php
$category2=$_POST['category2']; echo $category2; ?></textarea></td>
		      <td><textarea class="cost" name="cost2"><?php
if (!$connection = pg_connect ("host=localhost dbname=supermarket user=postgres password=postgres")) {
    $error = error_get_last();
   echo "Connection failed. Error was: ". $error['message']. "\n";
} 
$result2=pg_query($connection, "Select unit_price from product where product_name='$item2'");
	if  (!$result) {
 
  }
 
  if (pg_num_rows($result)) 
  {
  	while($rowA=pg_fetch_array($result2, NULL, PGSQL_ASSOC)) {
      		echo $rowA['unit_price'];
      	
      			
      		
    	}
  }
?></textarea></td>
		      <td><textarea class="qty" name="qty2"><?php
$qty2=$_POST['qty2']; echo $qty2?></textarea></td>
		      <td><span class="price" name="price2">23
</span></td>
 </tr>



 <tr class="item-row" >
 <td class="item-name"><div class="delete-wpr"><textarea name="item3"><?php
$item3=$_POST['item3'];
echo $item3; ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category3"><?php
$category3=$_POST['category3']; echo $category3; ?></textarea></td>
		      <td><textarea class="cost" name="cost3">
<?php
if (!$connection = pg_connect ("host=localhost dbname=supermarket user=postgres password=postgres")) {
    $error = error_get_last();
   echo "Connection failed. Error was: ". $error['message']. "\n";
} 
$result3=pg_query($connection, "Select unit_price from product where product_name='$item3'");
	if  (!$result) {
  // echo "Employee doesnt exists";
  }
 
  if (pg_num_rows($result3)) 
  {
  	while($rowA=pg_fetch_array($result3, NULL, PGSQL_ASSOC)) {
      		echo $rowA['unit_price'];
      		//echo "<br>";
      			
      		
    	}
  }
?></textarea></td>
		      <td><textarea class="qty" name="qty3"><?php
$qty3=$_POST['qty3']; echo $qty3 ?></textarea></td>
		      <td><span class="price" name="price3">23</span></td>
 </tr>
  
		  
	
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php
//$subtotal=$price1+$price2+$price3;
//echo $subtotal;
//echo "Hi";  ?>
</div></td>
		  </tr>
		 
		
		</table>
                <input type="submit"></input>
                </form>
		
	
	
	</div>
	
</body>

</html>
