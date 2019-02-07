<!DOCTYPE html>
<html>
<head>
    <title>AFTER LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="abc.css">
<style type="text/css">
    label{
        color: red;
    }
    h2{
        color:white;
    }


</style>
</head>
<body>
<body>
  <div class="sidenav">
  <a href="#about">Search For Students</a>
  <a href="selectroom.html">Book a Room</a>
  <a href="Feedetails.php">Fee Details</a>
</div>
<div class="main">
<div class="jumbotron jumbotron-fluid">
      <h1 class="well text-center" style="color: #B52B1C; font-style: oblique;">SREENIDHI HOSTELS<p>Welcome to Our Official Hostel Website</p><h1>
</div>
<div class="navbar navbar-reverse sticky-top">
    <ul class="nav">
      <li><a class="nav-link" href="homepage.php">Home</a></li>
        <li><a class="nav-link" href="register.php">Register</a></li>
      <li>
          <a class="nav-link" href="login.php">Login</a>
      </li>
      <li>
          <a class="nav-link" href="https://www.google.co.in/maps/place/gopi+krishnaveni+boys+hostel/@17.4446682,78.6739115,15z/data=!4m8!1m2!2m1!1sgopikrishnaveni+boys+hostel+location!3m4!1s0x3bcb760d301e7ca7:0xa330b7b95aed49e4!8m2!3d17.4486091!4d78.6789436">Location</a>
      </li>
    </ul>
    </div>
<h2><marquee>WELCOME TO SREENIDHI HOSTELS WEBSITE</marquee></h2>
<div class="container">
<button type="btn" class="btn-primary" data-toggle="collapse" data-target="#demo1"><span class="glyphicon glyphicon-collapse-down"></span>Pay Fees</button>
<button type="btn" class="btn-primary" data-toggle="collapse" data-target="#demo2">Current Status</button>
<a href="logout.php"><button type="btn" class="btn-primary">Log Out</button></a><br><br>
<div id="demo2">
  <h3 style="color:white">The current status of student is active</h3>
  </div>
<div id="demo1" >
		<form action="#" method="post">
	<div class="row">
	<div class=form-group>
		<label for="label-name">Select any option:</label>
		<select id="label-name">
  		<option>Credit Card</option>
  		<option>Debit Card</option>
  	</select>
	</div>
    </div>
    <div class="row">
	<div class="form-group"> 
    <label for="label-email">Bank:</label>
  	<select id="label-email">
  		<option>ANDHRA BANK</option>
  		<option>SBI</option>
  		<option>BOI</option>
  		<option>HDFC</option>
  	</select>
    </div>
    </div><br>
    <div class="row" >
    	<label for="label">Enter account Holder Name:</label>
    <input type="text" class="form-control" id="label" name="pass" placeholder="Enter name" required="">
    </div>
    <div class="row">
    	<label for="label1">Enter account Number</label>
    <input type="text" class="form-control" id="label1" name="pass" placeholder="Enter account number" required="">
    </div>
    <div class="row">
    	<label for="label1">Enter amount</label>
    <input type="text" class="form-control" id="label1" name="pass" placeholder="Enter amount" required="">
    </div><br>
    <div class="row">
    <input type="submit" class="btn-primary" value="submit">
    </div>
	</form>
	<br><br><br><br>
</div>
</div>
<div>
</div>
</div>
</body>
</html>