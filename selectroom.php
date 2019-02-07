<!DOCTYPE html>
<html>
<head>
	<title>BOOK A ROOM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style text="type/css">
	body{
		background-color: #EF897E;
	}
	.navbar{
	background-color: #5A80B4;
	margin-top: -35px;s
}
	.form-group{
		padding: 4px 4px 4px 4px;
		margin: 4px 4px 4px 4px;
	}
.nav-link{
	color: #8B0000;
	font-size: 30px;
	font-family: Arial, Helvetica, sans-serif;
}
.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.container{
	background-color: white;
	width: 500px;
	height: 330px;
	border:1px black solid;
	margin-top: 50px;
	border-radius: 25px 30px;
}
</head>
<body> 
<div class="sidenav">
  <a href="#about">Search For Students</a>
  <a href="#services">Check Availablity of room</a>
  <a href="selectroom.php">Book a Room</a>
  <a href="Feedetails.php">Fee Details</a>
</div>
<div class="main">
<div class="container">
	<div class="header">
		<h2 class="well text-center">Fill in details:</h2>
	</div>
	<form action="">
		<div class="row">
		<div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="fname">First Name:</label>
    		<input type="fname" class="form-control cols=""" id="fname">
  		</div>
  	    </div>
  	    <div class="row">
		<div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="lname">Last Name:</label>
    		<input type="lname" class="form-control cols=""" id="lname">
  		</div>
  	    </div>
  	    <div class="row">
		<div class="col-lg-5"></div>
		<div class="form-group">
			 Gender:&nbsp
    		 <input type="radio" name="gender" value="male" checked> Male
 			 <input type="radio" name="gender" value="female"> Female
  	    </div>
  		</div>
  	    <div class="row">
		<div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="faname">Father Name:</label>
    		<input type="faname" class="form-control cols=""" id="faname">
  		</div>
  	    </div>
		<div class="row">
		<div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="email">Email address:</label>
    		<input type="email" class="form-control cols=""" id="email">
  		</div>
  	    </div>
  	    <div class="row">
  	    <div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="rno">Room number:</label>
    		<input type="rno" class="form-control cols=""" id="rno">
  		</div>
  		</div>
  		<div class="row">
  	    <div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="phone" class="col-lg-6">Phone No:</label>
    		<input type="phone" class="form-control cols=""" id="phone">
  		</div>
  		</div>
  		
  		<div class="row">
  	    <div class="col-lg-5"></div>
		<div class="form-group">
    		<label for="addr">Permanent Address:</label>
    		<input type="addr" class="form-control cols=""" id="addr">
  		</div>
  		</div>
  		<div class="row">
  	    <div class="col-lg-5"></div>
  		<div class="form-group form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" type="checkbox"> Remember me
    		</label>
  		</div>
  		</div>
  		<div class="row">
  	    <div class="col-lg-5"></div>
  		<button type="submit" class="btn btn-primary">Submit</button>
  		</div>
  		</div>
	</form>
</div>