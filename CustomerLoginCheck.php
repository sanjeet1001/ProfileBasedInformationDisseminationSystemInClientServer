<?php
session_start();
include ("includes/connection.php");
$result = mysqli_query($conn,"SELECT * FROM newappp");
$uid=$_POST['userid'];
$passwd=$_POST['pass'];
$type = $_POST['memtype'];
$keymain = 0;
$keymember =0;
if($type=="main")
{
		while($row = mysqli_fetch_array($result)) {
			//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
		  if ($row['Uid']==$uid && $row['MasterPass']==$passwd)
		  {
			$keymain=1;
			$_SESSION["Uid"] = $uid;
			$_SESSION["FName"] = $row['FName'];
			$_SESSION["LName"] = $row['LName'];
			$_SESSION["Ward"] = $row['Ward'];
			
		  }
		 }
}
else
{
		while($row = mysqli_fetch_array($result)) {
			//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
		  if ($row['Uid']==$uid && $row['MemberPass']==$passwd)
		  {
			$keymember=1;
			$_SESSION["Uid"] = $uid;
			$_SESSION["FName"] = $row['FName'];
			$_SESSION["LName"] = $row['LName'];
			$_SESSION["Ward"] = $row['Ward'];
			
		  }
		 }
}
 if($keymain == 1)
 {
	header("Location:customerLogin.php");
 }
 else if($keymember==1)
 {
	 header("");
 }
 else
 {
	
	echo "Registration Number or Password is not Valid";
	//header("refresh:5;url=cloginform.php");
 }
?>