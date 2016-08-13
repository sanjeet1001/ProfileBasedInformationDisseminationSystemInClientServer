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
$ward=$_POST['ward'];
$pass1 = rand(1000,9999);
$pass2 = rand(1000,9999);
// include ("PHPMailer-master/test.php");




/*
$sql="CREATE TABLE NewAppp(Uid CHAR(10),PRIMARY KEY (Uid),FName CHAR(10),LName CHAR(10),Sex CHAR(10),BDay CHAR(30),MobNo INT(10),Email CHAR(30),Address CHAR(30),Ward CHAR(20),MasterPass CHAR(10),MemberPass CHAR(10))";

// Execute query
if (mysqli_query($conn,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/

$query = "INSERT INTO NewAppp (Uid,FName,LName,Sex,BDay,MobNo,Email,Address,Ward,MasterPass,MemberPass) 
	VALUES ('$userid','$fname','$lname','$sex','$bday','$mnumber','$cmail','$address','$ward','$pass1','$pass2');";
	echo $query;

if(mysqli_query($conn,$query)){
	echo "success";
	echo "Your Password is ".$pass1;
	echo "<br>Please Login with your RegNo and Password for Loan";
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