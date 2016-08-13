<?php
session_start();
include ("includes/connection.php");
$result = mysqli_query($conn,"SELECT * FROM Admin");
$uid=$_POST['AdminId'];
$passwd=$_POST['Password'];
$key1 = 0;
while($row = mysqli_fetch_array($result)) {
	//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
  if ($row['AdminId']==$uid && $row['Password']==$passwd)
  {
	$key1=1;
	$_SESSION["AdminId"] = $uid;
  }
 }
 if($key1 == 1)
 {
	header("Location:AdminLogin.php");
 }
 else
 {
	
	echo "Registration Number or Password is not Valid";
	//header("refresh:5;url=cloginform.php");
 }
?>