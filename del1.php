<html>
<title> Form Page </title>
<head>
<h2><center> <font color='red'>:-  Library  :-</font></center> </h2>
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
		<td></td>
			<td align='left' valign="middle"><input type='submit' name='s' value='Submit'
			<input type='submit' name='u' value='Back'>
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
$c=mysqli_connect('localhost','root','','Library');
if(mysqli_connect_errno())
{
	echo "<br>".mysqli_connect_error();
	echo "<br>".mysqli_connect_errno();
}
else
{
	if(isset($_POST['d']))
	{
		$a=$_POST['n'];
		$q="delete from Book_info where Book_code =$a";
		$r=mysqli_query($c,$q);
		if($r)
		{
			echo "<br> No of Record Delete =".mysqli_affected_rows($c);
		}
		else
		{
			echo "<br> error =".mysqli_errno($c);
		}
	}
	
	if(isset($_POST['d']))
	{
		header('location:book.php');
	}
}
mysqli_close($c);
?>