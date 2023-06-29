<?php
	$servername="localhost";
	$username="root";
	$password="";
	
	$conn=mysqli_connect($servername,$username,$password);
	
	if(!conn){
		die("Sorry we connect to failed : ".mysqli_connect_errno());
	}
	else{
		echo "Connection was successful";
	}
?>