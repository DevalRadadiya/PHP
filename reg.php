<?php
session_start();
echo "<br><b> welcome user ".$_SESSION['u']."<br>";
?>
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
<form method="post" enctype="multipart/form-data" action='welcome.php'>
<table width="393" border="1">
 <tr>
 	<td colspan="2" align='center'>registration form</td>
 </tr>
  <tr>
    <td width="159">Enter your full Name</td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td>Enter your Email</td>
    <td><input type="email" name="e"/></td>
  </tr>
  <tr>
    <td>Enter your Address</td>
    <td><textarea name="add"></textarea></td>
  </tr>
  <tr>
    <td>Enter your Mobile</td>
    <td><input type="text" pattern="[0-9]{10}" name="m" /></td>
  </tr>
  <tr>
    <td height="23">Select your Gender</td>
    <td>
	Male<input type="radio" name="g" value="m"/>
	Female<input type="radio" name="g" value="f"/>
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
    <td>Enter your age</td>
    <td><input type="number" name="age"/></td>
  </tr>
  <tr>
    <td>Choose your city</td>
    <td>
		<select name='c1'>
		<option >select city</option>
		<option value='r'>Rajkot</option>
		<option value='a'>Ahemdabad</option>
		<option value='b'>Baroda</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>research field</td>
    <td>
		AI<input type="checkbox" value="ai" name="hobb[]"/>
		ML<input type="checkbox" value="ml" name="hobb[]"/>
		DL<input type="checkbox" value="dl" name="hobb[]"/>
	</td>
  </tr>
  <tr>
    <td>Choose your event</td>
    <td>
		<select name='event[]' multiple size=3>
		<option value='w'>Workshop</option>
		<option value='s'>Seminar</option>
		<option value='f'>FDP</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Choose your Profile Pic </td>
    <td><input type="file" name="pic"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="save" value="Register Me"/>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>`
</form>
</body>
</html>
<?php
if(isset($_POST['save']))
{
	header('location:welcome.php');
}
?>