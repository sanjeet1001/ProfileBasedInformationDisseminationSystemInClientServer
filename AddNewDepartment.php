<html>
<body>
<?php
include ("includes/connection.php");


$DeptId= $_POST['DeptId'];
$DeptName= $_POST['DeptName'];




/*
$sql="CREATE TABLE Dept(DeptId VARCHAR(10),PRIMARY KEY (DeptId),DeptName VARCHAR(20))";

// Execute query
if (mysqli_query($conn,$sql)) {
  echo "New Officer successfully created";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/
$query = "INSERT INTO Dept(DeptId ,DeptName)
	VALUES ('$DeptId','$DeptName')";
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