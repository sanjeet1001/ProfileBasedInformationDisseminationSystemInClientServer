<?php
session_start();
?>
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
	<style type="text/css">
		p.solid 
		{
			border-bottom-style: solid;
			border-color :#fa0000;
		}
	</style>


		<script src="js/jquery.js"></script>
		<script src="js/emailvarification.js"></script>
		<script src="js/userIdCheck.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	<nav class="navbar navbar-light bg-faded" style="background-color: #81F7F3;" role="navigation" >
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img width="110" height="48" src="image/logoemc.gif">  </a>
		
		<div class="navbar-header navbar-right">
			<ul class="nav navbar-tabs nav-pills">
				<li role="presentation" class="active"><a href="customerLogin.php" >Home</a></li>
 				<li role="presentation" class="active"><a href="#">Complain Status</a></li>
				<li role="presentation" class="active"><a href="#" onclick="showDivNewComplain()">New Complain</a></li>
				<li role="presentation" class="active"><a href="#">LOGOUT</a></li>
			</ul>
		</div>
		
		</div>
	</nav>

<?php
echo 	'<div style="position: absolute;top: 70px;right: 10px;">';
echo 	"<span style='color:red'>Hi ".$_SESSION["FName"]."  ".$_SESSION["Uid"]." </span>";

echo 	'</div>';
?>

	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images slidersize" id="ex"><ul>
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


<div class=" ShowHide" id="new">
	<div class="panel panel-default">
		<p class="font solid" align="center">Complain Form</p>
		<table>
			        <form action="message2.php" method="POST">
			        <tr>
			          <td class="font" ><b>Write your complain here</b></td>
			          <td>  <textarea rows="5" cols="50" name="complainMessage" placeholder="requried field *" required ></textarea></td>
			          
					</tr>
			          <!-- fatching Department -->
				        <?php
				        	include ("includes/connection.php"); 
				        	$result2 = mysqli_query($conn,"SELECT * FROM Dept");
					        echo '<tr>';
					        echo  '<td class="font"><b>Department</b></td>';
					        echo '<td>  <select name="department" class="font1">';
					        	while($row = mysqli_fetch_array($result2)) {
					        		echo '<option value="'. htmlspecialchars($row['DeptId']) . '">'.$row['DeptName'].'</option>';
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


	

	<script>
		function showDivNewComplain()
		{
			document.getElementById("ex").style.display = "none";
			document.getElementById("new").style.display = "block";
		}
	</script>

	</body>
</html>