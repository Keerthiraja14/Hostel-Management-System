<!DOCTYPE html>
<html>
<head>
	<title>Search Student</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="abc.css">
	<style type="text/css">
		.container{
			width: 600px;
			height: 300px;
			background-color: white;
			margin-top: 40px;
		}
		form{
			padding:100px 20px 20px 60px;
		}
	</style>
</head>
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
<div class="container">
<form action="search.php" method="post">
	<input class="form-group" type="text"  name="search" id="search" placeholder="Search" required="">
	<button type="submit" class="btn-primary">Search</button>
	<p>Enter the id of the student to search</p>
</form>
</div>
</div>
</body>
</html>