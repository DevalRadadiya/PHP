<html>
<head>
<title>login from</title></head>
<body>
<form method="post">
<table align="center">
<tr>
<td colspan="3" align="center"> already registered please login here</td>
</tr>
<tr>
<td>User Name</td>
<td>:</td>
<td><input type="text" name="uname" /></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="btn_login" value="Login"/></td>
</tr>
<tr>
<td colspan="3" align="center"> have you not yet registered !!</td>
</tr>
<tr>
<td colspan="3" align="center"><a href="signup.php"> click here for signup </a></td>
</tr>

</table>
</form>
</body>
</html>
<?php
	
if(isset($_POST['btn_login']))
{
	session_start();
	
	setcookie('unm',$_SESSION['u'],time()+3600);
	setcookie('ps',$_SESSION['p'],time()+3600);
	if($_POST['uname']=$_COOKIE['unm'] and $_POST['password']==$_COOKIE['ps'])
	{
		header('location:reg.php');
	}
	else
	{
			if($_POST['uname']!=$_COOKIE['unm'] && $_POST['password']!=$_COOKIE['ps'])
			{
			echo"<br>Invalid User Name and password ";
			}
			elseif($_POST['uname']!=$_COOKIE['unm'])
			{
			echo"<br>Invalid User Name";
			}
			else
			{
				echo"<br>Invalid  Password";
			}
			
	}
}
?>
