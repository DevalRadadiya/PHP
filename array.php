<html>
<body>
<form method="POST">
AUTOMATIC Array:<input type="checkbox" name="c1" value="a"><br><br>
MANUALLY Array :<input type="checkbox" name="c2" value="m"><br><br>
ASSOCIATIVE Array :<input type="checkbox" name="c3" value="as"><br><br>
TWO - Dimentional Array :<input type="checkbox" name="c4" value="mu"><br><br>
<input type="submit" name="s" value="SUBMIT">
</form>
</body>
</html>
<?php
if(isset ($_POST['s']))
{
	$x=isset($_POST['c1']);
	$x1=isset($_POST['c2']);
	$x2=isset($_POST['c3']);
	$x3=isset($_POST['c4']);
	echo "<hr>";
	if($x=='a')
	{
		echo "<br> You Selected <strong>AUTOMATIC Array.......... </strong>  <br>";
		echo "<br>";
		$y=array(100,200,300);
		for($i=0 ; $i<=2 ;$i++)
		{
			echo $y[$i]."  ";
		}
	}
	echo "<hr>";
	if($x1=='m')
	{
		echo "<br> You Selected <strong>MANUALLY Array..........</strong>		<br>";
		echo "<br>";
		$y=array(100=>'php',200=>'java',300=>'sad');
		foreach ($y as $z)
		{
			echo $z."  ";
		}
	}
	echo "<hr>";
	if($x2=='as')
	{
		echo "<br> You Selected <strong>ASSOCIATIVE Array..........</strong>   <br>";
		//$y=array(100=>'php',200=>'java',300=>'sad');
		$y=array('php'=>100,'java'=>200,'sad'=>300);
		foreach ($y as $z=>$c)
		{
			echo  "<br>".$z." SUBJECT Marks :-  ".$c;
		}
	}
	echo "<hr>";
	if($x3=='mu')
	{
		echo "<br> You Selected <strong>MULTI-Dimentional Array..........</strong> <br>";
		$marks=array('Yagnik'=>array('php'=>90,'java'=>95,'sad'=>87),
					('Mahin'=>array('php'=>95,'java'=>90,'sad'=>78),
					('Nilesh'=>array('php'=>95,'java'=>87,'sad'=>84));
		foreach($marks as $k1=>$v1)
		{
			echo $k1."<br>";
			foreach($v1 as $k2=>$v2)
			{
				echo $k2."MARKS = ".$v2."<br>";
			}
		}
	}	
	//echo "<br> WORK IN PROCESS............<br>";
	}
}
?>
