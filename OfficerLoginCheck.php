<?php
session_start();
include ("includes/connection.php");
$result = mysqli_query($conn,"SELECT * FROM newofficer");
$uid=$_POST['officerid'];
$passwd=$_POST['pass'];
$key = 0;
while($row = mysqli_fetch_array($result)) {
	
  if ($row['Uid']==$uid && $row['Pass']==$passwd)
  {
	$key=1;
	$_SESSION["Uid"] = $uid;
	$_SESSION["FName"] = $row['FName'];
	$_SESSION["LName"] = $row['LName'];
	$_SESSION["WardId"] = $row['WardId'];
	$_SESSION["DeptId"] = $row['DeptId'];
  }
 }
 if($key == 1)
 {
	 echo 'pass';
	//header("Location:customerLogin.php");
 }
 else
 {
	
	echo "Registration Number or Password is not Valid";
	//header("refresh:5;url=cloginform.php");
 }
?>