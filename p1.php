<?PHP
$a=100;
echo "<br> <font size=6>";
function abc()
{
	$a=10;
	global $b;
	$b=$b+200;
	$GLOBALS['b']=$GLOBALS['b']+100;
	echo "<br> Value(local) of a = $a";
	echo "<br> Value(global) of b = ".$GLOBALS['b'];
	echo "<br> Value(global) fo b = ".$b;
}
abc();
echo "<br> Value(global) of b = $b";
>?