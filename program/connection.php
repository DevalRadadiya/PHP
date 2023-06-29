<?php
	$servername="localhost";
	$username="root";
	$password="";
	
	$con=mysqli_connect($servername,$username,$password);
	
	if($con)
	{
		echo "Connection was successful";
	}
	else
	{
		die("Sorry we connect to failed : ".mysqli_connect_errno());
	}
	$sql="create database dcr";
	$result=mysqli_query($con,$sql);
	
	if($result){
		echo "Datebase created was successfully..."."<br>";
	}
	else{
		echo "Database was not created...".mysqli_error($con);
	}
?>