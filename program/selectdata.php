<?php
	$con=new mysqli('localhost','root','','student');
	mysqli_connect()
	if($con->connect_error) 
	{
		die("Connection failed: ".$con->connect_error);
	}
	$sql = "select * from sem4";
	$a=Mysqli_query($con,$sql);
	echo "<center><table class='table table-hover'>
			<tr>
			<th scope='col' class='h5'>rollno</th>
			<th scope='col' class='h5'>fullname</th>	
			<th scope='col' class='h5'>email</th>
			<th scope='col' class='h5'>contact</th>
			<th scope='col' class='h5'>address</th>
			</tr>";
	while($result=mysqli_fetch_assoc($a))
	{
		echo "<td>".$result['rollno']."</td>";
		echo "<tr style='font-family: Arial, Helvetica, sans-serif'>";
		echo "<td>".$result['fullname']."</td>";
		echo "<td>".$result['email']."</td>";
		echo "<td>".$result['contact']."</td>";
		echo "<td>".$result['address']."</td>";
				
		echo "</tr>";
		}
	$con->close();
?>