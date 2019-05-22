<html>
<head>
<style>
body{
	background-image: url("./images/buy.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<b><h1>
<form action="getmedicine.php" method="post">
ENTER YOUR NAME:<input type="text" name="name"><br>
</br>
<label>CHOOSE THE MEDICINE YOU NEED..!</label>
<select name="medicine">
  <option value="paracetamol">paracetamol</option>
  <option value="aspirin">aspirin</option>
   <option value="zingdol">zingdol</option>
   <option value="dolo">dolo </option>
</select>
<br><br>
<label> MODE OF PAYMENT</label>
<input type="radio" name="mode" value="credit card">Cerdit card
  <input type="radio" name="gender" value="debit card">Debit card
  </br></br>
<input type="submit" name="submit">
</form></h1></b>
</body>
</html>