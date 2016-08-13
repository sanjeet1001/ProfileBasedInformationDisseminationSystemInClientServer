<html>
<body>
<?php
session_start();
include ("includes/connection.php");



$complainmsg = $_POST['complainMessage'];
$department = $_POST['department'];
$complaindate = date("d-m-Y");
$status ="new";
$FName = $_SESSION["FName"];
$LName = $_SESSION["LName"];
$Uid = $_SESSION["Uid"];
$Ward = $_SESSION["Ward"];
// include ("PHPMailer-master/test.php");




/*
$sql="CREATE TABLE NewComplain(ComplainId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,Uid CHAR(10), FOREIGN KEY (Uid) REFERENCES newappp(Uid) ,FName CHAR(10),LName CHAR(10),ComplainMessage VARCHAR(400),ComplainDate CHAR(30),Ward CHAR(20),Department CHAR(10),Status CHAR(10),FOREIGN KEY (Ward) REFERENCES ward(WardId),FOREIGN KEY (Department) REFERENCES dept(DeptId))";

// Execute query
if (mysqli_query($conn,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

*/
$query = "INSERT INTO NewComplain (Uid,FName,LName,ComplainMessage,ComplainDate, Ward,Department,Status) 
	VALUES ('$Uid','$FName','$LName','$complainmsg','$complaindate','$Ward','$department','$status')";
	echo $query;

if(mysqli_query($conn,$query)){
	echo "success";
}
else{
	echo "failed";
}
	
	
?>
<table>
	</tr><td><button><a href="front.php">click here</a></button></td></tr>
	</table>

</body>
</html>