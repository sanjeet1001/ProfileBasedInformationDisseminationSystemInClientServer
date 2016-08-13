
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

	<!--	<style>
			body {
			    background-color: #D3D3D3;
			}
		</style> -->
	</head>
	

	<body >
		<script src="js/jquery.js"></script>
		<script src="js/emailvarification.js"></script>
		<script src="js/userIdCheck.js"></script>
		<script src="js/bootstrap.min.js"></script>
	

	<nav class="navbar navbar-light bg-faded" style="background-color: #81F7F3;" role="navigation" >
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img width="110" height="48" src="image/logoemc.gif">  </a>
		
		<div class="navbar-header navbar-right">
			<ul class="nav navbar-tabs nav-pills">
 				<li role="presentation" class="nav-item nav-link" id="ho"><a href="front.php">Home</a></li>
				<li role="presentation" class="nav-item nav-link" id="pro"><a href="#">Profile</a></li>
				<li role="presentation" class="dropdown nav-item nav-link">
				 	<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Departement <span class="caret"></span>
    				</a>
    				

    				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    					<li><a href="#" data-toggle="modal" data-target="#logForm"><span class="glyphicon glyphicon-log-in"></span> Officer login</a></li>
    					<li role="separator" class="divider"></li>
    					<li><a href="#" data-toggle="modal" data-target="#adminlogin"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
  					</ul>


    			</li>
				<li role="presentation" class="dropdown nav-item nav-link">
				 	<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customer <span class="caret"></span>
    				</a>
    				

    				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    					<li><a href="#" data-toggle="modal" data-target="#CustlogForm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    					<li role="separator" class="divider"></li>
    					<li><a href="#" data-toggle="modal" data-target="#regForm"><span class="glyphicon glyphicon-open-file"></span> Register</a></li>
  					</ul>


    			</li>
			</ul>
		</div>
		
		</div>
	</nav>
	<?php
		$reg = -1;
		if($reg==1)
		{
		echo '<div class="alert alert-info" id="successformfill">';
		echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
		echo '<strong>Account Created Successfully :</strong> Please check your mail your password'; 
		echo '</div>';
		}
		elseif ($reg==0)
		{
		echo '<div class="alert alert-info" id="successformfill">';
		echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
		echo '<strong>Account Created Successfully :</strong> Please check your mail your password'; 
		echo '</div>';
		}
		else
		{

		}
	?>


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





	<div id="regForm" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content body-image">
	      <div class="modal-header body-image1"  >
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Customer Registration Form</h4>
	      </div>
	      <div class="modal-body">
	     
	    <table>
        <form action="message.php" method="POST">
        <tr>
          <td class="font" ><b>User ID</b></td>
          <td>  <input class="inputs font1" type="text" name="userid" placeholder="requried field *" required
          placeholder="requried field *" onchange="userIdCheck(this.value)"><br></td>
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
          onchange="emailCheck(this.value)"><br></td>
          <td ><div class="star"><span id="check"></span></div></td>
        </tr>
        <tr>
          <td class="font"><b>Address</b></td>
          <td>  <input class="inputs font1" type="text" name="address"  required placeholder="requried field *"><br></td>
          <td ><div class="star"></div></td>
        </tr>
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


	<div id="logForm" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
		      <div class="modal-header body-image1">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Officer Login</h4>
		      </div>
	      	<div class="modal-body">
	     
		    	<table>
			        <form action="OfficerLoginCheck.php" method="POST">
			        <tr>
			          <td class="font" ><b>User ID</b></td>
			          <td>  <input class="inputs" type="text" name="officerid" placeholder="requried field *" required
			          placeholder="requried field *"><br></td>
			          <td ><div class="star"><span id="uid" ></span></div></td>
			        </tr>
			          
			         <tr>
			          <td class="font" ><b>Password</b></td>
			          <td>  <input class="inputs" type="password" name="pass" placeholder="requried field *" required
			          placeholder="requried field *"><br></td>
			          <td ><div class="star"><span id="uid" ></span></div></td>
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

	<div id="CustlogForm" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
		      <div class="modal-header body-image1">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Customer Login</h4>
		      </div>
	      	<div class="modal-body">
	     
		    	<table>
			        <form action="CustomerLoginCheck.php" method="POST">
				        <tr>
				          <td class="font" ><b>User ID</b></td>
				          <td>  <input class="inputs" type="text" name="userid" placeholder="requried field *" required
				          placeholder="requried field *"><br></td>
				          <td ><div class="star"><span id="uid" ></span></div></td>
				        </tr>
				          
				        <tr>
				        	<td class="font">
				        		<b>Member Type</b>
				        	</td>
				        	<td>
				        		<input type="radio" name="memtype" value="main"><b class="font">Main</b><br>
				        		<input type="radio" name="memtype" value="member"> <b class="font">Member</b>
				        	</td>
				        </tr>

				         <tr>
				          <td class="font" ><b>Password</b></td>
				          <td>  <input class="inputs" type="password" name="pass" placeholder="requried field *" required
				          placeholder="requried field *"><br></td>
				          <td ><div class="star"><span id="uid" ></span></div></td>
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

	<div id="adminlogin" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		   <div class="modal-content body-image">
		      <div class="modal-header body-image1">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Admin Login</h4>
		      </div>
	      	<div class="modal-body">
	     
		    	<table>
			        <form action="AdminLoginCheck.php" method="POST">
			        <tr>
			          <td class="font" ><b>User ID</b></td>
			          <td>  <input class="inputs" type="text" name="AdminId" placeholder="requried field *" required
			          placeholder="requried field *"><br></td>
			          <td ><div class="star"><span id="uid" ></span></div></td>
			        </tr>
			          
			         <tr>
			          <td class="font" ><b>Password</b></td>
			          <td>  <input class="inputs" type="password" name="Password" placeholder="requried field *" required
			          placeholder="requried field *"><br></td>
			          <td ><div class="star"><span id="uid" ></span></div></td>
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


	</body>
	
</html>