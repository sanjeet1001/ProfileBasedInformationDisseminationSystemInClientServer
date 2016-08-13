
<html>
	<head>
		<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Getting start with bootstrap</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>

		<!-- End WOWSlider.com HEAD section -->
	</head>
	

	<body>
		<script src="js/jquery.js"></script>
		<script src="js/emailvarification.js"></script>
		<script src="js/userIdCheck.js"></script>
		<script src="js/bootstrap.min.js"></script>
	

	<nav class="navbar navbar-light bg-faded" style="background-color: #81F7F3;" role="navigation" >
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img width="110" height="48" src="image/logoemc.gif">  </a>
		
		<div class="navbar-header navbar-right">
			<ul class="nav navbar-tabs nav-pills">
				<li role="presentation" class="nav-item nav-link"><a href="AdminLogin.php">Home</a></li>
 				<li role="presentation" class="nav-item nav-link"><a href="#" data-toggle="modal" data-target="#AddNewOfficer">Add New Officer</a></li>
				<li role="presentation" class="nav-item nav-link"><a href="#" data-toggle="modal" data-target="#AddNewDepartment">Add New Departement</a></li>
				<li role="presentation" class="nav-item nav-link" ><a href="#" data-toggle="modal" data-target="#AddNewWard">Add Ward</a></li>
				<li role="presentation" class="nav-item nav-link"><a href="#">LOGOUT</a></li>
			</ul>
		</div>
		
		</div>
	</nav>


	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images slidersize"><ul>
		<li><img src="data1/images/clean1.jpg" alt="clean1" title="clean1" id="wows1_0"/></li>
		<li><img src="data1/images/clean2.jpg" alt="clean2" title="clean2" id="wows1_1"/></li>
		<li><img src="data1/images/clean3.jpg" alt="clean3" title="clean3" id="wows1_2"/></li>
		<li><img src="data1/images/savewater.jpg" alt="save-water" title="save-water" id="wows1_3"/></li>
		<li><img src="data1/images/savewater_0.jpg" alt="save-water" title="save-water" id="wows1_4"/></li>
		<li><img src="data1/images/saveenergy.jpg" alt="SaveEnergy" title="SaveEnergy" id="wows1_5"/></li>
		<li><img src="data1/images/savewater1.jpg" alt="SaveWater1" title="SaveWater1" id="wows1_6"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/savewater2.jpg" alt="wowslider" title="SaveWater2" id="wows1_7"/></a></li>
		<li><img src="data1/images/savewater3.jpg" alt="SaveWater3" title="SaveWater3" id="wows1_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="clean1"><span><img src="data1/tooltips/clean1.jpg" alt="clean1"/>1</span></a>
		<a href="#" title="clean2"><span><img src="data1/tooltips/clean2.jpg" alt="clean2"/>2</span></a>
		<a href="#" title="clean3"><span><img src="data1/tooltips/clean3.jpg" alt="clean3"/>3</span></a>
		<a href="#" title="save-water"><span><img src="data1/tooltips/savewater.jpg" alt="save-water"/>4</span></a>
		<a href="#" title="save-water"><span><img src="data1/tooltips/savewater_0.jpg" alt="save-water"/>5</span></a>
		<a href="#" title="SaveEnergy"><span><img src="data1/tooltips/saveenergy.jpg" alt="SaveEnergy"/>6</span></a>
		<a href="#" title="SaveWater1"><span><img src="data1/tooltips/savewater1.jpg" alt="SaveWater1"/>7</span></a>
		<a href="#" title="SaveWater2"><span><img src="data1/tooltips/savewater2.jpg" alt="SaveWater2"/>8</span></a>
		<a href="#" title="SaveWater3"><span><img src="data1/tooltips/savewater3.jpg" alt="SaveWater3"/>9</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<!-- Adding new officer form -->
	
	<div id="AddNewOfficer" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
	      <div class="modal-header body-image1">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Officer Registration</h4>
	      </div>
	      <div class="modal-body">
	     
	    <table>
        <form action="MemberRegistration.php" method="POST">

        <tr>
          <td class="font" ><b>User ID</b></td>
          <td>  <input class="inputs font1" type="text" name="userid" placeholder="requried field *" required
          placeholder="requried field *" onchange="officeUserIdCheck(this.value)"><br></td>
          <td ><div class="star"><span class="star" id="uid"  ></span></div></td>
        </tr>
       
        <tr>
          <td class="font" ><b>First Name</b></td>
          <td>  <input class="inputs font1" type="text" name="fname" required placeholder="requried field *"><br></td>
        </tr>
        <tr>
          <td class="font" ><b>Last Name</b></td>
          <td>  <input class="inputs font1" type="text" name="lname"  required placeholder="requried field *"><br></td>
        </tr>
        <tr>
          <td class="font"><b>Gender<b></td>
          <td class="font"><input type="radio" name="sex" value="male" required placeholder="requried field *">Male
            <input type="radio" name="sex" value="female" required placeholder="requried field *">Female 
            <input type="radio" name="sex" value="other" required placeholder="requried field *">Other
            <td ><div class="star"></div></td>

        </tr>
        <tr>
          <td class="font"><b>DoB</b></td>
          <td><input class="font1" type="date" name="bday" required placeholder="requried field *"><br></td>
          <td ><div class="star"></div></td>
        </tr>
        <tr>
          <td class="font"><b>Mobile Number</b></td>
          <td>  <input class="inputs font1" type="text" name="mnumber" required placeholder="requried field *"><br></td>
          <td ><div class="star"></div></td>
        </tr>
        <tr>
          <td class="font"  ><b>Email-ID</b></td>
          <td>  <input class="inputs font1" id="email" type="email" name="email" required 
          placeholder="requried field *"
          onchange="OfficerEmailCheck(this.value)"><br></td>
          <td ><div class="star"><span id="check"></span></div></td>
        </tr>
        <tr>
          <td class="font"><b>Address</b></td>
          <td>  <input class="inputs font1" type="text" name="address"  required placeholder="requried field *"><br></td>
          <td ><div class="star"></div></td>
        </tr>

<!-- fatching Ward -->

        <?php
        	include ("includes/connection.php"); 
        	$result1 = mysqli_query($conn,"SELECT * FROM Ward");
	        echo '<tr>';
	        echo  '<td class="font"><b>Ward</b></td>';
	        echo '<td>  <select name="ward" class="font1">';
	        	while($row = mysqli_fetch_array($result1)) {
	        		echo '<option value="'. htmlspecialchars($row['WardId']) . '">'.$row['WardName'].'</option>';
						//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
				}
	  
			echo "</select>";
	        echo '<td ><div class="star"></div></td>';
	        echo "</tr>";
        ?>

<!-- End of fatching Ward -->

<!-- fatching Department -->
        <?php
        	include ("includes/connection.php"); 
        	$result2 = mysqli_query($conn,"SELECT * FROM Dept");
	        echo '<tr>';
	        echo  '<td class="font"><b>Department</b></td>';
	        echo '<td>  <select name="department" class="font1">';
	        	while($row = mysqli_fetch_array($result2)) {
	        		echo '<option value="'. htmlspecialchars($row['DeptId']) . '">'.$row['DeptName'].'</option>';
						//echo "<br>".$row['RegNo']."=".$row['Pass']."=".$creg."=".$passwd;
				}
	  
			echo "</select>";
	        echo '<td ><div class="star"></div></td>';
	        echo "</tr>";
        ?>
<!--End of fatching Department -->


        <tr>
            <td></td>
          <td><br><input type="submit"></td>
        </tr>
        </form>
        </table>

	      </div>
	
	    </div>

	  </div>
	</div>
<!-- End of adding new officer form -->


<!-- Adding new department form -->

<div id="AddNewDepartment" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
	      <div class="modal-header body-image1">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Department Adding Form</h4>
	      </div>
	      <div class="modal-body">
	     
	    <table>
        <form action="AddNewDepartment.php" method="POST">

        <tr>
          <td class="font" ><b>Department ID</b></td>
          <td>  <input class="inputs font1" type="text" name="DeptId" placeholder="requried field *" required
          placeholder="requried field *" onchange="officeUserIdCheck(this.value)"><br></td>
          <td ><div class="star"><span class="star" id="uid"  ></span></div></td>
        </tr>
       
        <tr>
          <td class="font" ><b>Department Name</b></td>
          <td>  <input class="inputs font1" type="text" name="DeptName" required placeholder="requried field *"><br></td>
        </tr>
        <tr>
            <td></td>
          <td><br><input type="submit"></td>
        </tr>
        </form>
        </table>

	      </div>
	
	    </div>

	  </div>
	</div>

<!-- End of adding new department form -->

<!-- Adding new ward form -->

<div id="AddNewWard" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
	      <div class="modal-header body-image1">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Ward Adding Form</h4>
	      </div>
	      <div class="modal-body">
	     
	    <table>
        <form action="AddNewWard.php" method="POST">

        <tr>
          <td class="font" ><b>Ward ID</b></td>
          <td>  <input class="inputs font1" type="text" name="WardId" placeholder="requried field *" required
          placeholder="requried field *" onchange="officeUserIdCheck(this.value)"><br></td>
          <td ><div class="star"><span class="star" id="uid"  ></span></div></td>
        </tr>
       
        <tr>
          <td class="font" ><b>Ward Name</b></td>
          <td>  <input class="inputs font1" type="text" name="WardName" required placeholder="requried field *"><br></td>
        </tr>
        <tr>
            <td></td>
          <td><br><input type="submit"></td>
        </tr>
        </form>
        </table>

	      </div>
	
	    </div>

	  </div>
	</div>

<!-- End of adding new ward form -->


	</body>
	
</html>