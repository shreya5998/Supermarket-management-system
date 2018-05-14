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
             <form action="bill_f2.php" method="post">
            <textarea id="customer-title" name="cust_id">Cust_ID</textarea>
            <textarea id="customer-title" name="cust_name">Cust_Name</textarea>

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

		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Category</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		    <tr class="item-row" >
		      <td class="item-name"><div class="delete-wpr"><textarea name="item1"></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category1"></textarea></td>
		      <td><textarea class="cost" name="cost1">0.00</textarea></td>
		      <td><textarea class="qty" name="qty1">1</textarea></td>
		      <td><span class="price" name="price1">0.00</span></td>
		  </tr>
  <tr class="item-row" >
		      <td class="item-name"><div class="delete-wpr"><textarea name="item2"></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category2"></textarea></td>
		      <td><textarea class="cost" name="cost2">0.00</textarea></td>
		      <td><textarea class="qty" name="qty2">1</textarea></td>
		      <td><span class="price" name="price2">0.00</span></td>
		  </tr>
  <tr class="item-row" >
		      <td class="item-name"><div class="delete-wpr"><textarea name="item3"></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description" ><textarea name="category3"></textarea></td>
		      <td><textarea class="cost" name="cost3">0.00</textarea></td>
		      <td><textarea class="qty" name="qty3">1</textarea></td>
		      <td><span class="price" name="price3">0.00</span></td>
		  </tr>
		
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><textarea id="subtotal"  name="subtotal">0.00</textarea></td>
		  </tr>
		  
		
		</table>
                <input type="submit"></input>
                </form>
		
		
	</div>
	
</body>

</html>
