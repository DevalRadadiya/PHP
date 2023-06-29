<html>
<center>
<font size="6px" color="red"> SERVER </font><br>
</center>
<hr>
</html>
<?php
echo "<center>";
echo "<b>1.SERVER_NAME</b><br><br>";
echo "Name Of server=".$_SERVER['SERVER_NAME'];
echo "<hr>";
echo "<b>2.SERVER_PROTOCOL</b><br><br>";
echo "Name Of Server protocol=".$_SERVER['SERVER_PROTOCOL'];
echo "<hr>";
echo "<b>3.SERVER_SOFTWARE</b><br><br>";
echo "NAME OF SEREVR SOFTWARE=".$_SERVER['SERVER_SOFTWARE'];
echo "<hr>";
echo "<b>4.SERVER_ADMIN</b><br><br>";
echo "NAME OF SERVER ADMIN=".$_SERVER['SERVER_ADMIN'];
echo "<hr>";
echo "<b>5.SERVER_SIGNATURE</b><br><br>";
echo "NAME OF SERVER SIGNATURE=".$_SERVER['SERVER_SIGNATURE'];
echo "<hr>";
echo "<b>6.SCRIPT_NAME</b><br><br>";
echo "NAME OF SCRIPT=".$_SERVER['SCRIPT_NAME'];
echo "<hr>";
echo "<b>7.SCRIPT_FILENAME</b><br><br>";
echo "NAME OF SCRIPT FILENAME=".$_SERVER['SCRIPT_FILENAME'];
echo "<hr>";
echo "<b>8.REQUEST_METHOD</b><br><br>";
echo "NAME OF METHOD=".$_SERVER['REQUEST_METHOD'];
echo "<hr>";
echo "<b>9.REQUEST_TIME </b><br><br>";
echo "NAME OF REQUEST=".$_SERVER['REQUEST_TIME'];
echo "<hr>";
echo "<b>10.REMOTE_PORT</b><br><br>";
echo "NAME OF REMOTE PORT=".$_SERVER['REMOTE_PORT'];
echo "<hr>";
echo "<b>11.HTTP_HOST</b><br><br>";
echo "NAME OF HTTP HOST=".$_SERVER['HTTP_HOST'];
echo "<hr>";
echo "<b>12.HTTP_USER_AGENT</b><br><br>";
echo "NAME OF HTTP USER AGENT=".$_SERVER['HTTP_USER_AGENT'];
echo "<hr>";
echo "<b>13.HTTP_ACCEPT</b><br><br>";
echo "NAME OF HTTP ACCEPT=".$_SERVER['HTTP_ACCEPT'];
echo "</center>";

?>