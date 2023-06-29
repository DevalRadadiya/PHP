<?php
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$add = $_POST['add'];
		
		$q = mysqli_query($con,"insert into sem4 values ('','$fname','$email','$contact','$add')");
		if(!empty($q))
		{
			echo "<script>alert('Data insert successfully....')</script>";
			
		}
		else
		{
			echo "<script>alert('Error...')</script>";
		}
	}
	else
	{
		
	}
?>
<pre>
<form method="post">
Full Name :  <input type="text" name="fname" autocomplete="off">
Email :  <input type="email" name="email">
Mobile Number :  <input type="text" name="contact" maxlength="10">	
Address :  <input type="text" name="add">
<input type="submit" name="submit" value="Submit">
</form>
</pre>