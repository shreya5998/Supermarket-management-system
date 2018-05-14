
<?php
$connection =pg_connect ("host=localhost dbname=supermarket user=postgres password=9448901052") ;   
?>


<html>
<head>
<style>

#firstdiv
{
		background-color:black;
		width:auto;
		height:70px;
		margin:20px;
	border-bottom-right-radius: 0.5em;
	border-bottom-left-radius: 0.5em;
	border-top-right-radius: 0.5em;
	border-top-left-radius: 0.5em;
}
.title1,.title{
		font-family: "Comic Sans MS", cursive, sans-serif;
		color:grey;
		font-size: 25px;
		}

.title1{
	font-size: 50px;
	font-family: "Comic Sans MS", cursive, sans-serif;
		color:grey;
}


body{
	
	background-image:url("first.jpg") ;
	background-repeat: no-repeat;
	height:auto;
    width:auto;
	background-size:100%;
	background-attachment: fixed;
}



.real{
	
	height:150px;
	width:300px;
	background-color:black;
	border-bottom-right-radius: 2.5em;
	border-bottom-left-radius: 2.5em;
	border-top-right-radius: 2.5em;
	border-top-left-radius: 2.5em;
	
	
		box-shadow: 30px 10px 50px 	#696969;
	-moz-box-shadow: 30px 10px 50px 	#696969;
	-webkit-box-shadow: 30px 10px 50px 	#696969;
	-khtml-box-shadow: 30px 10px 50px 	#696969;
}

.real:hover{
		 opacity: .8;
		font-size:40px;
	-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
	
}
.gap{
	
	width:30px;
}

#logout{
	text-align:center;
	margin-right:50px;
	margin-top:50px;
	width:100px;
	height:50px;
	 line-height:50px;
	background-color:black;
	float:right;
	 opacity: .8;
	 
	font-size:20px;
	color:grey;
	border-bottom-right-radius: 0.5em;
	border-bottom-left-radius: 0.5em;
	border-top-right-radius: 0.5em;
	border-top-left-radius: 0.5em;
}

#logout:hover{
	width:200px;
	
	 
	 font-size:25px;
	 margin-right:100px;
	 font-weight:900;
	-moz-transform: scale(1.5);
		-webkit-transform: scale(1.5);
		transform: scale(1.5);
}
</style>
</head>


<body>

<div id="firstdiv">
	<center class='title1'>ADMIN PAGE</center>
</div>
<br><br><br>
<center>
<table >
<tr>
<td class='real' onclick='emp()'><center class='title'>EMPLOYEE DETAILS</center></td>
<td class='gap'></td>
<td class='real' onclick='cust()'><center class='title'>CUSTOMER DETAILS</center></td>
</tr>
</table>

<br>
<table>
<tr>
<td class='real'><center class='title' onclick='supp()'>SUPPLIER DETAILS</center></td>
<td class='gap'></td>
<td class='real'><center class='title' onclick='off()'>OFFERS</center></td>
<td class='gap'></td>
<td class='real'><center class='title' onclick='pro()'>PRODUCT DETAILS</center></td>
</tr>

</table>
</center>

</div>

<div id='logout' onclick='logout()'>LOGOUT</div>

<script>
	
function emp() {
    window.location.href = "employee/employee.php";
}

function cust() {
    window.location.href = "customer/cust_details.php";
}

function logout(){
	window.location.href="/dbms/login/login.php";
}

function supp(){
	window.location.href="supplier/supplier.php";
}

function off(){
	window.location.href="offers/offers.php";
}

function pro(){
	window.location.href="products/products.php";
}
</script>
</body>
</html>



