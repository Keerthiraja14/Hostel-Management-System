<!DOCTYPE html>
<html>
<head>
	<title>REGISTER PAGE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="abc.css">
	<style text="type/css">
.container{
		background-color: white;
	width: 400px;
	height: 320px;
	border:1px black solid;
	margin-top: 50px;
	border-radius: 25px 30px;
}
.submit,.form-group{
	margin-left: 80px;
}
.form-control{
	border:1px black solid;
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
        <li><a class="nav-link" href="#">Register</a></li>
      <li>
          <a class="nav-link" href="login.php">Login</a>
      </li>
      <li>
          <a class="nav-link" href="https://www.google.co.in/maps/place/gopi+krishnaveni+boys+hostel/@17.4446682,78.6739115,15z/data=!4m8!1m2!2m1!1sgopikrishnaveni+boys+hostel+location!3m4!1s0x3bcb760d301e7ca7:0xa330b7b95aed49e4!8m2!3d17.4486091!4d78.6789436">Location</a>
      </li>
    </ul>
    </div>
	<div class="container">
	<form action="#" method="post">
	<div class="row">
	<div class=form-group>
		<label for="label-name">Enter User Name:</label>
		<input type="text" class="form-control" id="label-name" name="user" class="form-control" placeholder="username" required="">
	</div>
    </div>
    <div class="row">
	<div class="form-group"> 
    <label for="label-email">Enter Password:</label>
    <input type="Password" class="form-control" id="label-email" name="pass" class="form-control" placeholder="password" required="">
    </div>
    </div><br>
    <div class="row">
    <button type="submit" name="submit" class="submit">Create Account</button>
    </div>
	</form>
	<?php
$con=mysqli_connect('localhost','root','','ss') or die(mysql_error());  

if(isset($_POST['submit'])){   
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    
    $query="insert into details(username,password) values ('$user','$pass')";
    $s="select username from details";
    $a=mysqli_query($con,$s);
    if($user==$a)
    {
        echo "Already registered enter new name";
    }
    else{
    if(mysqli_query($con,$query))
    {
        header('Location:registervalid.php');
    }
    else{
        echo "similar elements are there";
    } 
}
}  
?>
    </div>
</body>
</html>