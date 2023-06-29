<?php
$marks=array('hari'=>array('php'=>90,'java'=>95),
			 'ved'=>array('php'=>94,'java'=>92),
			'ram'=>array('php'=>89,'java'=>90));
foreach($marks as $k1=>$v1)
{
	echo $k1."<br>";
	foreach($v1 as $k2=>$v2)
	{
		echo $k2." marks ".$v2."<br>";
	}
}
?>