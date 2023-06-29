<?php
	$con=new mysqli('localhost','root','','student');
	if($con->connect_error) 
	{
		die("Connection failed: ".$con->connect_error);
	}
	$sql="delete from sem4 where rollno=5";
	if ($con->query($sql)==TRUE) 
	{
		echo "Record deleted successfully";
	} 
	$con->close();
?>