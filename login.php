<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="abc.css">
	<style text="type/css">
.container{
	background-color: white;
	width: 600px;
	height: 330px;
	border:1px black solid;
	margin-top: 50px;
	border-radius: 25px 30px;
}
body{
	background-color: blue;
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
		<form action="#" method="post">
		<div class="form-group">
			<label for="email"><h3>Username:</h3></label>
			<input type="text" class="form-control"  name="user" placeholder="Enter your id" required="">
		</div>
		<div class="form-group">
			<label for="password"><h3>Password:</h3></label>
			<input type="password" class="form-control" name="pass" placeholder="Enter your password" required="">
		</div>
		<div>
			<button style="margin-left:7px;" name="submit" class="submit" type="submit">Get In</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Register</a>
		</p>
	<?php 
$conn=mysqli_connect("localhost","root","","ss"); 
if(isset($_POST["submit"])){  
    $username=$_POST['user'];
    $password=$_POST['pass'];

    if($username=="admin" && $password=="admin"){
          header('Location:book.php');
    }

    $result=mysqli_query($conn,'select * from details where username="'.$username.'" AND password="'.$password.'"');

    if(mysqli_num_rows($result)==1){
           $_SESSION['valid'] = true;
           $_SESSION['timeout'] = time();
           $_SESSION['username'] = '$username';
        header('Location:loginvalid.php');
    }
    else{
       echo '<script language="javascript">';
	   echo 'alert("Incorrect Username/Password")';
       echo '</script>';

    }
}
?>
</div><br><br><br>
</body>
</html>