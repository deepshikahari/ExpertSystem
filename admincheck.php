<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
require_once "db1.php";

$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$x="select * from adminlogin where username='$a' and BINARY password='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] = $row["username"];
	$_SESSION["pwd"]=$row["password"];
		
	
	echo "<script type='text/javascript'>window.location.href='adminmenu.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "log1.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised1.php';</script>";
?> 
<?php
echo "<body style='background: url(https://www.google.co.in/search?q=pills+image&tbm=isch&source=iu&ictx=1&fir=D1-vM5X7oEmU3M%253A%252CFtLOUBo_F0nU9M%252C_&usg=__8S-IBXAzOva5BLEFxqLDhe_9TPg%3D&sa=X&ved=0ahUKEwjBxbjBsa_ZAhUGp48KHZC0CPMQ9QEILDAB#imgrc=D1-vM5X7oEmU3M:'>";
?>
<body>
</body>
</html>