<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="medicine";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) 
{
	echo "<script type='text/javascript'>alert('Connection Error. Please Contact Admin');window.location.href = 'index.php';</script>";
}

//include "db1.php";
// define variables and set to empty values
$patientname = $age = $gender = "";
$count=0;

if (isset($_POST['submit'])) {
  $patientname = test_input($_POST["patientname"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $res=mysqli_query($conn,"INSERT into patient value('$patientname','$age','$gender')");
  echo mysqli_error($conn);
  if($res)
  {
	  include "entersymp.php";

}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>