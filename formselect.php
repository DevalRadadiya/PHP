<?php
echo "<form method='get>
value1:<input type='text' name='v1'><br><br>
value2:<input type='text' name='v2'><br><br>
<input type='checkbox' name='r1' value='c' checked>addition:
<input type='checkbox name='r2' value='f'>subtraction:">
echo "<br><input type='submit' name='s1'></form>";
if(isset($_GET['s1']))
{
	$a=$_GET['v1'];
	$b=$_GET['v2'];
	if(isset($_GET['r1'])=='c')
	{
		$c=$a+$b;
		echo "add= $c";
	}
	if(isset($_GET['r2'])=='f')
	{
		$c=$a-$b;
		echo "<br> Sub= $c";
	}
}
?>