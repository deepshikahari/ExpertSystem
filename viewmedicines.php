<html>
<head>
<style>
body{
	background-image: url("./images/view.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<?php
include "db1.php";
	

//$s=$_POST["sno"];
$x=mysqli_query($conn,"select * from new");

if(mysqli_num_rows($x)!=0)
{
	//echo "<h2>Doctor details `\t` `\t` `\t`Patient Name</h2>";	
	echo "<table border='3px'><tr><thead><td>symptom</td><td>disease</td><td>medicine</td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	$symptom=$r["symptom"];
	$disease=$r["disease"];
	$medicine = $r["medicine"];
    echo "<tr><td>$symptom</td><td>$disease</td><td>$medicine</td></tr>";
	}
	 echo "</table>";  

	exit();
}

?>
</body>
</html>


