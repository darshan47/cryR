<html>
	<head><title>Database</title></head>
	<body bgcolor="lightblue">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<table border="1px solid">	
		<tr><td>Sr.No:-</td>
		<td><input type="text" name="sr" ></input><br><br></td></tr>
		<tr><td>Name:-</td>	
		<td><input type="text" name="name" ></input><br><br></td></tr>
		<tr><td>Area:-</td>
		<td><input type="text" name="area" ></input><br><br></td></tr>
		<tr><td>Address:-</td>
		<td><input type="text" name="addr" ></input><br><br>
		<tr><td>Mobile:-</td>
		<td><input type="text" name="mob" ></input><br><br>
		<tr><td>Email:-</td>
		<td><input type="text" name="ema" ></input><br><br>
		<tr><td>Landline:-</td>
		<td><input type="text" name="land" ></input><br><br>	
		</table>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="s1" value="Submit" ></input>&nbsp&nbsp&nbsp
		<input type="reset" name="r1" value="Reset All"></input>
		</form>
	</body>
</html>



<?php

/*
For Error Reporting "ON":-

error_reporting(E_ALL);
ini_set('display_errors', '1');
*/

/*Turing Off Warnings:-
Inital values shown blank are avoided coz of this*/
error_reporting(E_ERROR);

$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password,"O&N_Customers");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sr=$_POST['sr'];
$name=$_POST['name'];
$area=$_POST['area'];
$addr=$_POST['addr'];
$mob=$_POST['mob'];
$ema=$_POST['ema'];
$land=$_POST['land'];


mysqli_query($conn,"INSERT INTO Customers VALUES('$sr','$name','$area','$addr','$mob','$ema','$land')");

$res=mysqli_query($conn,"Select * from Customers");
if($res=== FALSE) {
    die(mysql_error()); // TODO: better error handling
}


echo "----------------------------------------------------------------------Result Set--------------------------------------------------------------------------------------------------- ";

echo "<br><br>";
echo "<table border='5px solid' cellpadding='9px' cellspacing='9px'>";

while($row=mysqli_fetch_array($res))
 {
	echo "<tr><td>";
  echo $row['Sr.No.']."</td><td> ".$row['Name']."</td><td> ".$row['Area']." </td><td>".$row['Address']." </td><td>".$row['Mobile']." </td><td>".$row['Email']." </td><td>".$row['Landline']."</td> ";
echo "</tr>";
 } 

mysqli_close($conn);

?> 
