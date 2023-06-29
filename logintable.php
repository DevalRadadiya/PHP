<html>
<head>
	<title>LOGIN FORM</title>
</head>
<h1><center>LOGIN FORM</center></h1>
<center>
<<form method ='POST'>
<table border="5px" height="50%" width="50%" align="center">
<tr>
<td>
<table height="50%" width="100%" align="center">
<tr>
	<th>USER NAME :</th>
	<th><input type ="text" name="unm" ></th>
</tr>
<tr>
	<th>Password :</th>
	<th><input type ="password" name="psw" ></th>
</tr>
<tr> 
	<th><input type ="submit" name="s" ></th>
</tr>
</table>
</tr>
</td>
</table>
</center>
</form>
</html>
<?php
if(isset ($_POST['s']))
{
	$a=$_POST['unm'];
	$b=$_POST['psw'];
	
	echo "USER NAME :".$a;
	echo "<br>";
	echo "Password :".$b;
}
?>
