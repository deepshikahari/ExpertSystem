<html>
<head>
<style>
body{
	background-image: url("./images/doc.jpg");
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
<form action="getlocation.php" method="post">
available city:<br><input type="text" name="city"><br>
available speciality:<br><input type="text" name="speciality"><br><br>
<input type="submit" name="submit">
</form>
</h1>
</body>
</html>