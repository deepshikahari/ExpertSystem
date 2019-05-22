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
$name = $medicine = "";
if (isset($_POST['submit'])) {
  $name = test_input($_POST["name"]);
  $medicine = test_input($_POST["medicine"]);
  $res=mysqli_query($conn,"INSERT into prescription value('$name','$medicine')");
  echo mysqli_error($conn);
 $query = "SELECT * FROM price WHERE medicine ='$medicine'";  
                $doctor = mysqli_query($conn, $query);  
                if(mysqli_num_rows($doctor) > 0)  
                {  
                     while($row = mysqli_fetch_array($doctor))  
                     {  
                      ?><h1><?php echo "you have to pay  !-------------->";?></h1>
                      <h1><?php echo $row["cost"];?></h1><?php
					  
                      }

}
else
{
	echo "sorry no Orders.........";
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
	background-image: url("./images/.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>