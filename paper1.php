<html>
<head>
	<title>Login Form</title>
</head>
<br><br><br><br><br><br><br><br><br><br>
<h1 align='center'>Login Form</h1><br>
<form method='post'>
<table border='5pxl' align='center' height='30%' width='30%'>
<tr>
<td>
<table height='95%' width='95%' align='center' bgcolor='#9dd7f5'>
	<tr>
		<th>User Name :</th>
		<th><input type='text' name='unm'></th>
	</tr>
	<tr>
		<th>Password :</th>
		<th><input type='password' name='psw'></th>
	</tr>
	<tr>
		<th></th>
		<th><br><input type='submit' name='s'></th>
	</tr>
</table>
</td>
</tr>
</table>
</form>
<center><br><a href='book.php'>Click here</center>
</html>
<?php
if(isset($_POST["s"]))
{
	$_SESSION['u'];
	$_SESSION['p'];
	session_start();
	setcookie("unm","",time()+3600);
	setcookie("psw","",time()+3600);
	$_COOKIE['unm']=$_SESSION['u'];
	$_COOKIE['psw']=$_SESSION['p'];
	$u1=$_POST['unm'];
	$u="/^[A-Z][a-z]{7}$/";
	$a=$_POST['psw'];
	$p="/^[a-z@_0-9]{6}$/";
	if(preg_match($u,$u1) && preg_match($p,$a))
	{
		$_SESSION['u']=$_POST['unm'];
		$_SESSION['p']=$_POST['psw'];
		header('location:book.php');
	}
	else
	{
		if($_COOKIE["unm"]!=$u1 && $_COOKIE["psw"]!=$p)
		{
			echo "<br><font size=5 color='red'><center><b> User Name And Password Wrong!
			</b></center></font>";
		}	
		else if($_COOKIE["unm"]!=$u1)
		{
			echo "<br><b><center> User Name Wrong!</b></center>";
		}	
		else if($_COOKIE["psw"]!=$p)
		{
			echo "<br><b><center>password  Wrong!</b></center>";
		}
	}
}
?>