<?php 

$dbname = "marianne";
$host = "localhost";
$user = "root";
$passwd = "";


// Create connection
$con = mysqli_connect($host,$user,$passwd,$dbname);

$error=false;
// Check connection
if (mysqli_connect_errno($con))
{
  $error = true;
  $errorMsg = "Impossible de se connecter à la base de données.";
}

?>
	
	