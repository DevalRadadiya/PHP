<html>
<head>
<title>login from</title></head>
<body>
<form method="post">
<table align="center">
<tr>
<td>User Name</td>
<td>:</td>
<td><input type="text" name="unm" name="u1" pattern="[a-zA-Z]*" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="psw" name="p1" pattern="[0-9]*" required></td>
</tr>
<tr>
<td>confirm Password</td>
<td>:</td>
<td><input type="password" name="cpsw"  name="p2" pattern="[0-9]*" required >
Make sure to type the same password</td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="btn_sgn" value="Login"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['btn_sgn']))
{
	//session_start();
	//$um=$_POST['unm'];
	//$pwd=$_POST['psw'];
	//$cpwd=$_POST['cpsw'];
		if($_POST['psw']==$_POST['cpsw'])
		{
			session_start();
			$_SESSION['u']=$_POST['unm'];
			$_SESSION['p']=$_POST['psw'];
			header('location:loginck.php');
		}
		else
		{
			echo"pass word not mattched";
		}
}	
?>

  

    
