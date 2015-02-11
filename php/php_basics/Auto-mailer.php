<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$body = "New account has been created"; 

echo "<h1>Hey there Welcome to Oraganiv and Naturals Services</h1>";

  
if(mail("12097darshan@gmail.com","Reply if found :P",$body))
{
echo "Success";
}
else echo "fail";
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
