<?php
$myusername=isset($_POST['nm'])? $_POST['nm']:"";
$mypassword=isset($_POST['pass'])? $_POST['pass']:"";
$servername="localhost";

$conn=mysql_connect($servername,"root","");
if($conn==FALSE)
echo "connection failed";
//else
//echo "connected succesfully";
mysql_select_db("userlogin");
$sql = "select id from submit where username='$myusername' and password= '$mypassword'";
	$result=mysql_query($sql,$conn);
	$count=mysql_num_rows($result);
if($count==1)
{
	system("/var/www/html/network.sh");
}
else
echo "your login name or password is invalid";
?>

<html>
<body bgcolor=76AFF8>
<head>
<center>
<b>
"---PLEASE SELECT YOUR PROTOCOL---"
</b>
</head>
<form action="protocols.php" method="POST">
<input type="radio" value="tcp" name="pro">
TCP 
<br>
<input type="radio" value="udp" name="pro">
UDP 
<br>
<input type="radio" value="arp" name="pro">
ARP 
<br>
<input type="submit" value="submit" name="submit">

</center>
</form>
</body>
</html>
