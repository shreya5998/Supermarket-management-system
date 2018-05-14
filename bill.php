<?php
session_start();
$item1=$_POST['item1'];
//echo $item1;
//echo '<br';
/*$category=$_POST['category'];
echo $category;
echo '<br';*/
 /*if (isset($_REQUEST['cust_id']))
{
$cust_id = stripslashes($_REQUEST['cust_id']);
$cust_name = stripslashes($_REQUEST['cust_name']);
echo $cust_id;
echo $cust_name;
echo '<br';
}*/
$cost=$_POST['cost'];
$qty=$_POST['qty'];
$price=$cost*$qty;
echo $price;


?>
