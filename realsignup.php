<?php
include "db1.php";
// define variables and set to empty values
$username=$password="";
if (isset($_POST['submit'])) {
	  $username = test_input($_POST["uid"]);
      $password = test_input($_POST["pid"]);
  $res=mysqli_query($conn,"INSERT into login  values('$username','$password')");
}
  if($res)
  {
  echo"<script type='text/javascript'>alert('signed up successfully go and login');</script>";
  include "userlogin.php";
  }
else
{
	echo"<script type='text/javascript'>alert('please fill all the details.....');</script>"; 
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
	background-image: url("./images/n.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>

