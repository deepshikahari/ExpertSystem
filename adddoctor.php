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
	echo "<script type='text/javascript'>alert('Connection Error. Please Contact Admin');window.location.href = 'log.php';</script>";
}

//include "db1.php";
// define variables and set to empty values
$city = $doctor = $speciality = "";
if (isset($_POST['submit'])) {
  $city = test_input($_POST["city"]);
  $doctor = test_input($_POST["doctor"]);
  $speciality = test_input($_POST["speciality"]);
  $res=mysqli_query($conn,"INSERT into doctorlist value('$city','$doctor','$speciality')");
  echo mysqli_error($conn);
  if($res)
  {
	  include "viewdoctors.php";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
</head>
<body> 
<style>
body{
	background-image: url("./images/m.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>