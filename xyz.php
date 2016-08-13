<?php
        	include ("includes/connection.php"); 
        	$result = mysqli_query($conn,"SELECT * FROM Dept");
	        echo '<tr>';
	        echo  '<td class="font"><b>Department</b></td>';
	        echo '<td>  <select name="department" class="font1">';
	        	while($row = mysqli_fetch_array($result)) {
	        		echo '<option value="'. htmlspecialchars($row['DeptId']) . '">'.$row['DeptName'].'</option>';
						//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
				}
	  
			echo "</select>";
	        echo '<td ><div class="star"></div></td>';
	        echo "</tr>";
        ?>