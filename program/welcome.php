<?php
echo "<br> Thank you for registeration... ";
echo "<br> Welcome to home page..";
echo "<br> your detail is as below ....<hr>";
echo "<br> your name is ".$_POST['nm'];
echo "<br> your email is ".$_POST['e'];
echo "<br> your address is ".$_POST['add'];
echo "<br> your mobile is ".$_POST['m'];
echo "<br> your gender is ".$_POST['g'];
echo "<br> your dob is ".$_POST['dd']."/".$_POST['mm']."/".$_POST['yy'];
echo "<br> your age is ".$_POST['age'];
echo "<br> your city is ".$_POST['ct'];
if(isset($_POST['h1']) and isset($_POST['h2']) and isset($_POST['h3']))
{
echo "<br> your research field is ".$_POST['h1']." and ".$_POST['h2']." and ".$_POST['h3'];
}
elseif(isset($_POST['h1']) and isset($_POST['h2']))
{
echo "<br> your research field is ".$_POST['h1']." and ".$_POST['h2'];
}
elseif(isset($_POST['h1']) and isset($_POST['h3']))
{
echo "<br> your research field is ".$_POST['h1']." and ".$_POST['h3'];
}
elseif(isset($_POST['h2']) and isset($_POST['h3']))
{
echo "<br> your research field is ".$_POST['h2']." and ".$_POST['h3'];
}
else
{
 echo "<br>select your reserch field";
}

		if(isset($_POST["event"]))
        {
            echo " <br> You selected event is.....";
			// Retrieving each selected option
            foreach ($_POST['event'] as $event)
			{
				
				if($event=='workshop')
				{
					 echo "---- $event";
					
				}
				if($event=='seminar')
				{
					echo " --- $event";
				}	
				if($event=='fdp')
				{
					echo "---- $event<br/>";

				}	
			}
		}
		else
		{
			echo "<br> please select your event";
		}
		


	$t=$_FILES['f1']['tmp_name'];
	$o=$_FILES['f1']['name'];
	
	if(move_uploaded_file($t,'move/'.$o))
	{
		echo "<br> file uploaded successfully";
	}
echo "<hr>";
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

  

    
