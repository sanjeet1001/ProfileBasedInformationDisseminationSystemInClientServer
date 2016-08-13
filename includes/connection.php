<?php
$username="root";
$passwd="sanjeet";
$dbname="test";
$host="localhost";



$conn=mysqli_connect($host,$username,$passwd,$dbname);
// Check connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
else{
	//echo 'Connection Success<br>';
}

?>	