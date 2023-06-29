<?php
echo "<form method='get'>
 1.CHR : <input type='radio' name='d1' value='a'>
 2.ORD : <input type='radio' name='d1' value='b' >
 3.STRTOLOWER : <input type='radio' name='d1' value='c' >
 4.STRTOUPPEr : <input type='radio' name='d1' value='d' >
 5.STRREV : <input type='radio' name='d1' value='e' >
 6.STRLEN : <input type='radio' name='d1' value='f' >
 7.LTRIM : <input type='radio' name='d1' value='g' >
 8.RTRIM : <input type='radio' name='d1' value='h' >
 9.TRIM : <input type='radio' name='d1' value='i' >
 10.SUBSTR  : <input type='radio' name='d1' value='j' >";
echo "<br><input type='submit' name='save'></form>";
if(isset($_GET['save']))
{
	if(isset($_GET['d1']))
	{
		if(($_GET['d1'])=='a')
		{
			echo chr(101);
		}
		elseif(($_GET['d1'])=='b')
		{
			echo ord("Deval");
		}
		elseif(($_GET['k1'])=='c')
		{
			echo strtolower("DEVAL RADADIYA");
		}
		elseif(($_GET['k1'])=='d')
		{
			echo strtoupper("deval radadiya");
		}
		elseif(($_GET['k1'])=='e')
		{
			echo strrev("ATMIYA");
		}
		elseif(($_GET['k1'])=='f')
		{
			echo strlen("Deval Radadiya");
		}
		elseif(($_GET['k1'])=='g')
		{
			echo ltrim("Deval Radadiya");
		}
		elseif(($_GET['k1'])=='h')
		{
			echo rtrim("Deval Radadiya");
		}
		elseif(($_GET['k1'])=='i')
		{
			echo trim("Deval Radadiya");
		}
		elseif(($_GET['k1'])=='j')
		{
			echo substr("Deval Radadiya",5);
		}
		else
		{
			echo " ";
		}
	}
}
?>