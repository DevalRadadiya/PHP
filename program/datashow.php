<?php
$a= mysqli_connect("localhost","root","","student");
$q = mysqli_query($a, "select * from sem4");
echo mysqli_num_rows($q);
echo "<br>".mysqli_num_fields($q);
echo "<center><table border=1 style='width:45%'>
	<tr style='background-color: #008000'>
	<th>Rollno</th>
	<th>Name</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Address</th>
	</tr>";
	
// while($b = mysqli_fetch_array($q))
while($b = mysqli_fetch_assoc($q))
{
	// echo "<tr>";
	// echo "<td>".$b[0]."</td>";
	// echo "<td>".$b[1]."</td>";	
	// echo "<td>".$b[2]."</td>";
	// echo "<td>".$b[3]."</td>";
	// echo "</tr>";
	
	echo "<tr style='font-family:Monospace,font-weight: bold'>";
	echo "<td>".$b['rollno']."</td>";
	echo "<td>".$b['fullname']."</td>";
	echo "<td>".$b['email']."</td>";
	echo "<td>".$b['contact']."</td>";
	echo "<td>".$b['address']."</td>";
	echo "</tr>";
}
?>