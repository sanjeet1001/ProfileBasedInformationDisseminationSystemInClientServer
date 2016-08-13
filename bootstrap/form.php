<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<table >
<p><span class="error">* required field.</span></p>
<form action="message.php" method="POST">
<tr>
<td colspan="2"><font size = 17><b>User Registartion</b></font></td>
</tr>
<tr>
	<td><b>User ID : </b></td>
	<td>  <input type="text" name="rnumber" required ><br></td>
	<td class="error">*</td>
</tr>
<tr>
	<td><b>Name : </b></td>
	<td>  <input type="text" name="name" required><br></td>
	<td class="error">*</td>
</tr>
<tr>
	<td><b>Gender <b></td>
	<td><input type="radio" name="sex" value="male" required>Male
		<input type="radio" name="sex" value="female" required>Female </td>
		<td class="error">*</td>

</tr>
<tr>
	<td><b>Mobile Number : </b></td>
	<td>  <input type="text" name="mnumber" required><br></td>
	<td class="error">*</td>
</tr>
<tr>
	<td><b>Email-ID : </b></td>
	<td>  <input type="text" name="email"><br></td>
</tr>
<tr>
	<td><b>Address : </b></td>
	<td>  <input type="text" name="address" required><br></td>
	<td class="error">*</td>
</tr>

<tr>
    <td></td>
	<td><br><input type="submit"></td>
</tr>
</form>
</table>

</body>
</html>