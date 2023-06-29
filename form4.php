
<html>
<title> Form Page </title>
<head>
<h2><center> <font color='red'>:-  Product Data Base  :-</font></center> </h2>
</head>
<form method ='post'>
<table border='5px' align='center' height='70%' width='70%' cellpadding='10' cellspacing='10'>
<tr>
<td>
	<table height='60%' width='90%' align='center'  bgcolor='bollel red'  cellpadding="10" cellspacing="10" border='2'>
	<tr>
		<td align="center"><b>Product_Name   : </b></td>
		<td><input type='text' name='n'></td>
		<td align="center"><b>Product Id   : </b></td>
		<td><input type='text' name='p'></td>
	</tr>
	<tr>
		<td align="center"><b>country_Name   : </b></td>
		<td>
		<select name="s1">
		<option>India</option>
		<option>Lundan</option>
		<option>West Indies</option>
		<option>Sri Lanka</option>
		<option>U.K</option>
		</select></td>
		<td align="center"><b>Categary   : </b></td>
		<td><input type='text' name='c1'></td>
		
	</tr>
	<tr>
		<td align="center"><b>Price   : </b></td>
		<td><input type='text' name='p1'></td>
		<td align="center"><b>Company_Name   : </b></td>
		<td>
		<select name="s2">
		<option>IndianMark</option>
		<option>Amazone</option>
		<option>MicroSoft</option>
		<option>Reliance</option>
		<option>Ifco</option>
		</select></td>
	</tr>
	<tr>
		<td align="center"><b> Manufacturer : </b></td>
		<td><input type='text' name='m'></td>
		<td align="center"><b>Buyer  : </b></td>
		<td><input type='text' name='b'></td>
	</tr>
	<tr>
		<td align="center"><b> Brand : </b></td>
		<td><input type='text' name='b1'></td>
		<td align="center"><b>Brand_Id  : </b></td>
		<td><input type='text' name='b2'></td>
	</tr>
	<tr>
		<td align="center"><b> Year : </b></td>
		<td><input type='date' name='bdt'></td>
		<td align="center"><b>Discount  : </b></td>
		<td><input type='text' name='d'></td>
	</tr>
	<tr>
		<td></td>
			<td align='right' valign="middle">
			<input type='submit' name='s' value='Submit'>
			<input type='submit' name='r' value='Insert'>
			<input type='submit' name='u' value='Update'>
			<input type='submit' name='u' value='Delete'></td>
	</tr>
</td>
</td>
</table>
</form>
</html>
<?php
$c=mysqli_connect('localhost','root','','student');
if(mysqli_connect_errno())
{
	echo "<br>".mysqli_connect_error();
	echo "<br>".mysqli_connect_errno();
}
else
{
	echo "<br> Connection Set ";
	if(isset($_POST['s']))
	{
		$a=$_POST['n'];
		$b=$_POST['s2'];
		$f=$_POST['p1'];
		$d=$_POST['m'];
		$e=$_POST['b1'];
		$x=$_POST['bdt'];
		//$g=$_POST['p'];
		$h=$_POST['c1'];
		$i=$_POST['s1'];
		$j=$_POST['b'];
		$k=$_POST['b2'];
		$l=$_POST['d'];
		$q="insert into product_data (Product_Name,country_Name,price,Manufacturer,Brand,Year,Categary,Company_Name,
		Buyer,Brand_Id,Disccount)values('$a','$b','$f','$d','$e','$x','$h','$i','$j','$k','$l')";
		if(mysqli_query($c,$q))
		{
			echo "<br> Record Inserted...";
		}
	}
}
mysqli_close($c);
?>