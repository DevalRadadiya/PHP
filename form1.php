<form method='get'>
User Name : <input type='text' name='unm'><br><br>
Password : <input type='password' name='psw'><br><br>
<input type='submit' name='s1'>
</form>
<?php
if(isset($_get['s1']))
{
	$a=$_GET['unm'];
	$b=$_GET['psw'];
	echo "User Name : $a";
	echo "Password : $b";
}
?>