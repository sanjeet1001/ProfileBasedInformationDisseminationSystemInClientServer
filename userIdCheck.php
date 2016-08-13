<?php
	include ("includes/connection.php");
	$q = $_REQUEST["q"];
	$yes=0;
	//$e = "whoissanjeet@gmail.com";


	$sql = "SELECT Uid FROM NewAppp";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	if($q==$row["Uid"]){
	    		echo "UserId already exist";
	    		$yes = 1;
	    	}
	        
	    }
	} 
	if($yes == 0){
		echo "✔";
	}
	
	$conn->close();
	
?>
