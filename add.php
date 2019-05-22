<html>
<head>
<style>
body{
	background-image: url("./images/add.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<h1><font color="white"><b>
<form action="addmedicine.php" method="post">
<div align='center'>enter symptom:<br></div>
<div align='center'><select name="symptom"></div>
  <option value="headache">headache </option>
  <option value="chill and shivering">chill and shivering</option>
   <option value="cold">cold </option>
   <option value="stomachpain">stomachpain </option>
</select><br>
<div align='center'>enter disease:<br><input type="text" name="disease"><br></div>
<div align='center'>enter medicine:<br><input type="text" name="medicine"><br></div>
<input type="submit" name="submit">
</b>
</font>
</h1>
</form>
</body>
</html>