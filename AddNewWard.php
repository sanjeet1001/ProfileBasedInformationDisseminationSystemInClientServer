<html>
<body>
<?php
include ("includes/connection.php");


$WardId= $_POST['WardId'];
$WardName= $_POST['WardName'];




/*
$sql="CREATE TABLE Ward(WardId VARCHAR(10),PRIMARY KEY (WardId),WardName VARCHAR(20))";

// Execute query
if (mysqli_query($conn,$sql)) {
  echo "New Officer successfully created";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/
$query = "INSERT INTO Ward(WardId ,WardName)
	VALUES ('$WardId','$WardName')";
	echo $query;

if(mysqli_query($conn,$query)){
	echo "success";
}
else{
	echo "failed";
}

	
	
?>
<table>
	</tr><td><button><a href="AdminLogin.php">click here</a></button></td></tr>
	</table>

</body>
</html>