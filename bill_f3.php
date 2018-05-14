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
<form action="bill_f4.php" method="post">

              <textarea id="customer-title" name="cust_id"><?php
$cust_id=$_POST['cust_id']; echo $cust_id ?></textarea>
            <textarea id="customer-title" name="cust_name"><?php
$cust_name=$_POST['cust_name']; echo $cust_name ?></textarea>

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
		<!--<form action="bill_f4.php" method="post">-->
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
$cost1=$_POST['cost1']; echo $cost1?></textarea></td>
		      <td><textarea class="qty" name="qty1"><?php
$qty1=$_POST['qty1']; echo $qty1?></textarea></td>
		      <td><span class="price" name="price1"><?php 
session_start();
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
$cost2=$_POST['cost2']; echo $cost2?></textarea></td>
		      <td><textarea class="qty" name="qty2"><?php
$qty2=$_POST['qty2']; echo $qty2?></textarea></td>
		      <td><span class="price" name="price2"><?php 

$cost2=$_POST['cost2'];
$qty2=$_POST['qty2'];
$price2=$cost2*$qty2;
echo $price2;?></span></td>
 </tr>



 <tr class="item-row" >
 <td class="item-name"><div class="delete-wpr"><textarea name="item3"><?php
$item3=$_POST['item3'];
echo $item3; ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category3"><?php
$category3=$_POST['category3']; echo $category3; ?></textarea></td>
		      <td><textarea class="cost" name="cost3"><?php
$cost3=$_POST['cost3']; echo $cost3 ?></textarea></td>
		      <td><textarea class="qty" name="qty3"><?php
$qty3=$_POST['qty3']; echo $qty3 ?></textarea></td>
		      <td><span class="price" name="price3"><?php 

$cost3=$_POST['cost3'];
$qty3=$_POST['qty3'];
$price3=$cost3*$qty3;
echo $price3;?></span></td>
 </tr>
  
		  
		
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><textarea id="subtotal" name="subtotal"><?php
$subtotal=$price1+$price2+$price3;
echo $subtotal; ?>
</textarea></td>
		  </tr>
		  
		
		</table>
                <input type="submit"></input>
                </form>
		
		
	
	</div>
	
</body>

</html>
