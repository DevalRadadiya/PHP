<form method='post'>
<center>
	Roll No. : <input type='text' name='rn'><br><br>
	Full Name : <input type='text' name='fn'><br><br>
	Email : <input type='email' name='em'><br><br>
	Contact : <input type='text' name='cn' maxlength=10><br><br>
	Address : <input type='text' name='ad'><br><br>
	<input type='submit' name='in' value='Insert'>
	<input type='submit' name='up' value='Update'>
	<input type='submit' name='dl' value='Delete'>
	<input type='submit' name='sb'>
	<input type='reset' name='rs'>
</center>
</form>
<?php
	$a=mysqli_connect('localhost','root','','student');
	if(mysqli_connect_error())
	{
		echo "error".mysqli_connect_error();

	}
	else
	{
		echo "connect";
	}
	if(isset($_POST['in']))
	{
		$rn=$_POST['rn'];
		$fn=$_POST['fn'];
		$em=$_POST['em'];
		$cn=$_POST['cn'];
		$ad=$_POST['ad'];
		mysqli_query($a,"insert into sem4 values('','$fn','$em','$cn','$ad')");
	}
	if(isset($_POST('up')))
	{
		
	}
?>