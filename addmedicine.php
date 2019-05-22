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
$symptom = $medicine = "";
if (isset($_POST['submit'])) {
  $symptom = test_input($_POST["symptom"]);
  $disease = test_input($_POST["disease"]);
  $medicine = test_input($_POST["medicine"]);
  $res=mysqli_query($conn,"INSERT into new value('$symptom','$disease','$medicine')");
  echo mysqli_error($conn);
  if($res)
  {
	  include "viewmedicines.php";
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