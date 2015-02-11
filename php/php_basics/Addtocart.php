<!--Author:Darshan Shah
Problem:Making an "Add-to-cart" like program for E-commerce use
Date:26-Nov-2014
-->

<?php session_start();
?>
<html>
	<head><title>Grand Site</title>
	<rel link="stylesheet" type="text/css" href="1.css">
	</head>
	<body background="1.jpg">
		<div id="div_prod_disp">
		 <div border="5px solid"></div>
		</div>
	<h1 style="color:darkred"> Add to cart</h1>
	<p style="color:white">Value of Rs.<p>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	<input type="text" name="t1"> </input>
	<input type="submit" value="Submit"></input>
		</body>
</html>

<?php

error_reporting(E_ERROR);
ini_set('display_errors', '1');

$_SESSION["new"]=$_POST['t1'];
$_SESSION["total"]+=$_SESSION["new"];

echo "<br><br><p style='color:white;'>Total:<br><br>".$_SESSION["total"]."</p>";

?>

