<html>
<title> Form Page </title>
<head>
<h2><center> <font color='red'>:-  Form Data Base  :-</font></center> </h2>
</head>
<form method ='post'>
<table border='5px' align='center' height='60%' width='60%' cellpadding='30' cellspacing='5'>
<tr>
<td>
	<table height='100%' width='100%' align='center'  bgcolor='bollel red'  cellpadding="30" cellspacing="5" border='2'>
	<tr>
		<td align="center"><b>Roll Number  : </b></td>
		<td><input type='text' name='n'></td>
	</tr>
	<tr>
		<td align="center"><b>Full Name  : </b></td>
		<td><input type='text' name='fnm'></td>
	</tr>
	<tr>
		<td align="center"><b>Email Id  : </b></td>
		<td><input type='email' name='ei'></td>
	</tr>
	<tr>
		<td align="center"><b>Contect Number  : </b></td>
		<td><input type='text' name='cn'></td>
	</tr>
	<tr>
		<td align="center"><b>BirthDate  : </b></td>
		<td><input type='date' name='b'></td>
	</tr>
	<tr>
		<td></td>
			<td align='left' valign="middle"><input type='submit' name='s' value='Submit'>
			<input type='submit' name='r' value='Insert'>
			<input type='submit' name='u' value='Update'>
			<input type='submit' name='u' value='Delete'></td>
	</tr>
	<tr>
	
	</table>
</td>
</tr>
</table>
</form>
</html>
<?php
$c=mysqli_connect('localhost','root','','student');
if(mysqli_connect_errno())
{
	echo "<br>".mysqli_connect_error();
	echo "<br>".mysqli_connect_errno();
}
else
{
	echo "<br> Connection Set ";
	if(isset($_POST['s']))
	{
		$a=$_POST['n'];
		$b=$_POST['fnm'];
		$f=$_POST['ei'];
		$d=$_POST['cn'];
		$e=$_POST['b'];
		$q="insert into sem4 (fullname,email,contact,bdate) values('$b','$f','$d','$e')";
		if(mysqli_query($c,$q))
		{
			echo "<br> Record Inserted...";
		}
	}
}
mysqli_close($c);
?>