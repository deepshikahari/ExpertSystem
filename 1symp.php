<html>
<head>
<style>
body{
	background-image: url("./images/l.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<h1>
<font color='white'>
<form action="display1.php" method="post">
<br><br>
<div align='center'>please select the symptom:<br></div>
<br><br>
<div align='center'><select name="symptom"></div>
  <option value="headache">headache </option>
  <option value="chill and shivering">chill and shivering</option>
   <option value="sneezing">sneezing </option>
   <option value="stomachpain">stomachpain </option>
   <option value="acid reflux">acid reflux </option>
   <option value="pressure across your forehead">pressure across your forehead </option>
   
</select><br><br>
<div allign='center'><button type="submit" name="submit">submit</button></div>
</font>
</form>
</body>
</html>