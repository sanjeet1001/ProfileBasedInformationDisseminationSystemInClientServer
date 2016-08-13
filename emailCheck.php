<?php
	include ("includes/connection.php");
	$q = $_REQUEST["q"];
	//$e = "whoissanjeet@gmail.com";


	$sql = "SELECT Email FROM NewAppp";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	if($q==$row["Email"]){
	    		echo "Email alrady exist";
	    	}
	        
	    }
	} 
	
	$conn->close();
	
?>
