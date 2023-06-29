<?php
echo "<br> Thank you for registeration... ";
echo "<br> Welcome to home page..";
?>

<form method="post">
<input type="submit" name="btn_out" value="Logout"/></td>
</form>

<?php
if(isset($_POST['btn_out']))
{	session_start();
	session_destroy();
	header('location:loginck.php');
}	
?>

  

    
