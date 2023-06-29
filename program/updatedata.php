<?php
	$con=new mysqli('localhost','root','','student');
	if($con->connect_errorno) 
	{
		die("Connection failed: ".$con->connect_error);
	}
	if ($con->query($sql)==TRUE) 
	{
		echo "Record updated successfully";
	} 
	else 
	{
		echo "Error updating record: ".$con->error;
	}
	$con->close();
?>