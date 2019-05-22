<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<html>
<head>
</head>
<body background: "/images/jesse-orrico-60373-unsplash.jpeg"> 
<div class="container" style="padding: 90px;font-family: Roboto;">
  <h1>Patient detail form</h1>
  <hr>
<form method="post" class="form-group" action="patient1.php">
 <label for="exampleInputEmail1"><h1>Name:</h1></label>  
   <input type="text" name="patientname" class="form-control">
  <br><br>
  <label for="exampleInputEmail1"><h1>Age:</h1></label> 
   <input type="text" name="age" class="form-control">
  <br><br>
  <label for="exampleInputEmail1"><h1>Gender:</h1></label>
  <input type="radio" name="gender" value="female"><b>Female</b>
  <input type="radio" name="gender" value="male"><b>Male</b>
  <br><br>
  <h1><button class="btn btn-default" type="submit" name="submit" value="Submit">done</button>  </h1>
</form>
</div> 
</body>
<style type="text/css">
  
  body {
    background-image: url("images/jesse-orrico-60373-unsplash.jpg");
     background-repeat: no-repeat;
    background-size: cover;
  }
</style>
</html>
