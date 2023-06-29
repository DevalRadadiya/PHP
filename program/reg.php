
<html>
<head>
<title>Registration Form</title>
<style>
	input,textarea{width:200px}
	input[type=radio],input[type=checkbox]{width:10px}
	input[type=submit],input[type=reset]{width:100px}
</style>
</head>

<body>
<center>
<?php
	session_start();
	echo "<br> Welcome User ".$_SESSION['u']."<br>";
?>
	<form method="post" enctype="multipart/form-data" action='welcome.php'>
	<table height="70%" width="30%" border="1">
	<tr>
		<td colspan="2" align='center'>Registration form</td>
	</tr>
	<tr>
		<td width="159">Enter Your Full Name</td>
		<td width="218">
		<input type="text" placeholder="Your First Name"  
		name="nm" pattern="[a-z A-Z]{1,15}" required /></td>
	</tr>
	<tr>
		<td>Enter your Email</td>
		<td><input type="email" name="e" placeholder='Enter Your Email'/></td>
	</tr>
	<tr>
		<td>Enter your Address</td>
		<td><textarea name="add" placeholder='Enter Your Address'></textarea></td>
	</tr>
	<tr>
		<td>Enter your Mobile</td>
		<td><input type="text" pattern="[0-9]{10}" name="m" placeholder="Enter Your Mobile Number"/></td>
	</tr>
	<tr>
		<td height="23">Select your Gender</td>
		<td>
			Male<input type="radio" name="g" value="male"/>
			Female<input type="radio" name="g" value="female"/>
		</td>
	</tr>
	<tr>
		<td>Select your DOB</td>
		<td>
			<select name="dd">
			<option value="">Date</option>
<?php 
	for($i=1;$i<=31;$i++)
	{
		echo "<option value='$i'>".$i."</option>";
	}
?>
</select>
<select name="mm">
<option value="">Month</option>
<?php 
	for($i=1;$i<=12;$i++)
	{
		echo "<option value='$i'>".$i."</option>";
	}
?>
</select>
		
		<select name="yy">
			<option value="">Year</option>
			<?php 
			for($i=1900;$i<=2015;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td>Enter Your Age</td>
    <td><input type="number" name="age" placeholder="Enter Your Age"/></td>
  </tr>
  <tr>
    <td>Choose Your City</td>
    <td>
		<select name='ct'>
		<option >Select City</option>
		<option value='Rajkot'>Rajkot</option>
		<option value='Ahemdabad'>Ahemdabad</option>
		<option value='Baroda'>Baroda</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Research Field</td>
    <td>
		AI<input type="checkbox" value="AI" name="h1"/>
		ML<input type="checkbox" value="ML" name="h2"/>
		DL<input type="checkbox" value="DL" name="h3"/>
	</td>
  </tr>
  <tr>
    <td>Choose Your Event</td>
    <td>
		<select name='event[]' multiple size=3>
		<option value='workshop'>Workshop</option>
		<option value='seminar'>Seminar</option>
		<option value='fdp'>FDP</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Choose your Profile Pic </td>
    <td><input type="file" name="f1"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="save" value="Register Me"/>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['save']))
{
	header('location:welcome.php');
}
?>