
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
$x=mysqli_query($conn,"select * from patient");

if(mysqli_num_rows($x)!=0)
{
	//echo "<h2>Doctor details `\t` `\t` `\t`Patient Name</h2>";	
	echo "<table border='3px'><tr><thead><td>Patient name</td><td>Age</td><td>Gender</td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	$patientname = $r["patientname"];
	$age=$r["age"];
	$gender=$r["gender"];
	

	
	
	  echo "<tr><td>$patientname</td><td>$age</td><td>$gender</td></tr>";
	}
	 echo "</table>";  

	exit();
}

?>
</body>
</html>



