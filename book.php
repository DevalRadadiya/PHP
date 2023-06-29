<html>
<title> Form Page </title>
<head>
<h2><center> <font color='red'>:-  Form Data Base  :-</font></center> </h2>
</head>
<form method ='post'>
<table border='5px' align='center' height='60%' width='60%' cellpadding='30' cellspacing='5'>
<tr>
<td>
	<table height='100%' width='100%' align='center'  bgcolor='bollel red'  cellpadding="30" cellspacing="5" border='2'>
	<tr>
		<td align="center"><b>Book_code  : </b></td>
		<td><input type='text' name='n'></td>
	</tr>
	<tr>
		<td align="center"><b>Book_Name  : </b></td>
		<td><input type='text' name='fnm'></td>
	</tr>
	<tr>
		<td align="center"><b>price : </b></td>
		<td><input type='text' name='p'></td>
	</tr>
	<tr>
		<td></td>
			<td align='left' valign="middle"><input type='submit' name='s' value='Submit'>
			<input type='submit' name='cr' value='Create'>
			<input type='submit' name='i' value='Insert'>
			<input type='submit' name='r' value='Display'>
			<input type='submit' name='u' value='Update'>
			<input type='submit' name='d' value='Delete'></td>
	</tr>
	<tr>
	
	</table>
</td>
</tr>
</table>
</form>
</html>
<?php
$c=mysqli_connect('localhost','root','','library');
if(mysqli_connect_errno())
{
	echo "<br>".mysqli_connect_error();
	echo "<br>".mysqli_connect_errno();
}
else
{
	echo "<br> Connection Set ";
	echo "<br><br>Connection Id =".mysqli_thread_id($c);
	if(isset($_POST['cr']))
	{
		$a=mysqli_query($c,"create table student123
		(
		Book_code INT(3) auto_increment,
		primary key (Book_code),
		Book_Name VARCHAR(20),
		price int(3)
		)");
		if($a)
		{
		echo "<br> TABLE IS CREATED.....<br>";
		}
		else
		{
			echo "<br>" .mysqli_error($c);
		}
	}
	if(isset($_POST['i']))
	{
		$a=$_POST['n'];
		$b=$_POST['fnm'];
		$f=$_POST['p'];
		$q="insert into Book_info (Book_Name,price) values('$b','$f')";
		if(mysqli_query($c,$q))
		{
			echo "<br>";
			echo "<br<<br>Raw Id :".mysqli_insert_id($c);
			echo "<br> Record Inserted...";
		}
	}
	if(isset($_POST['r']))
	{
		$q="select * from Book_info";
		$a=mysqli_query($c,$q);
			echo "<br> Number of Record =".mysqli_num_rows($a);
			echo "<br> Number of Fields =".mysqli_num_fields($a);
			echo "<br> Number of Fields Count =".mysqli_field_count($c);
			echo "<form><table border =8>
			<tr><td>Book_code</td><td>Book_Name</td>
			<td>price</td></tr>";
		while($row=mysqli_fetch_assoc($a))
		{
				echo "<tr><td>".$row['Book_code']."</td>";
				echo "<td>".$row['Book_Name']."</td>";
				echo "<td>".$row['price']."</td>";
		}
		echo"</table></form>";
	}
	if(isset($_POST['d']))
	{
		header('location:del1.php');
	}
	if(isset($_POST['u']))
	{
		header('location:up1.php');
	}
}
mysqli_close($c);
?>
