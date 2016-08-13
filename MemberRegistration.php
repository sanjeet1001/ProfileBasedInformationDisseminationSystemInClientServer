<html>
<body>
<?php
include ("includes/connection.php");


$userid= $_POST['userid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex=$_POST['sex'];
$bday=$_POST['bday'];
$mnumber=$_POST['mnumber'];
$cmail=$_POST['email'];
$address=$_POST['address'];
$wardid=$_POST['ward'];
$deptid=$_POST['department'];
$pass = rand(1000,9999);
//include ("PHPMailer-master/test.php");



/*
$sql="CREATE TABLE NewOfficer(Uid CHAR(10),PRIMARY KEY (Uid),FName CHAR(10),LName CHAR(10),Sex CHAR(10),BDay CHAR(30),MobNo INT(11),Email CHAR(30),Address CHAR(30),WardId CHAR(20),DeptId VARCHAR(10), Pass CHAR(10))";

// Execute query
if (mysqli_query($conn,$sql)) {
  echo "New Officer successfully created";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/
$query = "INSERT INTO newofficer (Uid,FName,LName,Sex,BDay,MobNo,Email,Address,WardId,DeptId,Pass) 
	VALUES ('$userid','$fname','$lname','$sex','$bday','$mnumber','$cmail','$address','$wardid','$deptid','$pass');";
	echo $query;

if(mysqli_query($conn,$query)){
	echo "success";
	echo "Your Password is ".$pass;
	echo "<br>Please Login with your RegNo and Password for Loan";
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