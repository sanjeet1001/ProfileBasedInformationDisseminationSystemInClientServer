<?php
session_start();
include ("includes/connection.php");
$result = mysqli_query($conn,"SELECT * FROM newappp");
$uid=$_POST['userid'];
$passwd=$_POST['pass'];
$key = 0;
while($row = mysqli_fetch_array($result)) {
	//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
  if ($row['Uid']==$uid && $row['MasterPass']==$passwd)
  {
	$key=1;
	$_SESSION["Uid"] = $uid;
	$_SESSION["FName"] = $row['FName'];
  }
 }
 if($key == 1)
 {
	header("Location:customerLogin.php");
 }
 else
 {
	
	echo "Registration Number or Password is not Valid";
	//header("refresh:5;url=cloginform.php");
 }
?>