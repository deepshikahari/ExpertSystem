<html>
<head>
<style>
body{
	background-image: url("./images/display.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db1.php";
$symptom1 = $symptom2 = $syptom3 = "";
$symptom1=trim($_POST["symptom1"]);
$symptom2=trim($_POST["symptom2"]);
$symptom3=trim($_POST["symptom3"]);
$x=mysqli_query($conn,"select * from new where symptom='$symptom1' or symptom='$symptom2' or symptom='$symptom3'");

if(mysqli_num_rows($x)!=0)
{
	//echo "<h2>Doctor details `\t` `\t` `\t`Patient Name</h2>";	
	echo "<table border='3px'><tr><thead><td>disease</td><td>medicine</td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	
	$disease=$r["disease"];
	$medicine=$r["medicine"];

	
	
	  echo "<tr><td>$disease</td><td>$medicine</td></tr>";
	}
	 echo "</table>";  

	exit();
}
else
{
	echo "incorrect";
}
}
?>
<body>
</body>
</html>

