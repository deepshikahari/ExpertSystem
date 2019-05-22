
<?php
include "db1.php";
	

//$s=$_POST["sno"];
$x=mysqli_query($conn,"select * from doctorlist");

if(mysqli_num_rows($x)!=0)
{
	//echo "<h2>Doctor details `\t` `\t` `\t`Patient Name</h2>";	
	echo "<table border='3px'><tr><thead><td>city</td><td>name</td><td>speciality</td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	$city=$r["city"];
	$doctor = $r["doctor"];
	$speciality=$r["speciality"];
    echo "<tr><td>$city</td><td>$doctor</td><td>$speciality</td></tr>";
	}
	 echo "</table>";  

	exit();
}

?>


