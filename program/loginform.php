<?php
	session_start();
	setcookie('unm',$_SESSION['u'],time()+3600);
	setcookie('ps',$_SESSION['p'],time()+3600);
	if(isset($_POST['sbmt']))
	{
		$unm=$_POST['fname'];
		$pswd=$_POST['pswd'];
	}	
		if($unm==$_COOKIE['unm'] and $pswd==$_COOKIE){
			
		}
	
?>
<html>
<head>
<title>Login Form</title>
</head>
<body>
	<form method="post">
	<label for="fname">Enter name:</label><br>
	<input type="text" id="fname" name="fname" placeholder="Enter Your First Name"><br>
	<label for="lname">Password</label><br>
	<input type="password" id="pswd" name="pswd" placeholder="Enter Your Password"><br><br>
	<input type="submit" value="Submit" name="sbmt">
</body>
</html>