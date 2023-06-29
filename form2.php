<form method='post'>
User Name : <input type='text' name='unm'><br><br>
Password : <input type='password' name='psw'>
<input type='submit' name='s1'>
</form>
<?php
if(isset($_post['s1']))
{
	$a=$_POST['unm'];
	$b=$_POST['psw'];
	echo "User Name : $a";
	echo "Password : $b";
}