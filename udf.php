<?php
function add ($x,$y=10)
{
	$c=$x+$y;
	return $c;
}
$ans=add(5,20);
$ans=add(5);
$ans=add(5,$y);//-NOT VALITED IN OUTPUT...
echo $ans;
?>