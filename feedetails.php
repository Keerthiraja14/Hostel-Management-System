<!DOCTYPE html>
<html>
<head>
	<title>FEE DETAILS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="abc.css">
    <style type="text/css">
    	th{
    		color: #000;
    		padding-left: 30px;
    	}
    	h2,h3{
    		color: red;
    	}
    	td{
    		color: #778989;
    	}
    	table{
    		margin-left: 180px;
    		margin-top: 40px;
    		background-color: #246815;
    		border: 3px white solid;
    	}
    </style>
</head>
<body>
 <div class="sidenav">
  <a href="student.php">Search For Students</a>
  <a href="selectroom.html">Book a Room</a>
  <a href="#contact">Fee Details</a>
</div>
  <div class="main">
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
<div class="container-fluid"> 
<div class="w3-content w3-section">
  <img class="mySlides w3-animate-fading" src="1.jpg" style="width:100%;height: 300px;">
  <img class="mySlides w3-animate-fading" src="2.jpg" style="width:100%;height: 300px;">
  <img class="mySlides w3-animate-fading" src="3.jpg" style="width:100%;height: 300px;">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
}

function myfun(){
		 document.getElementById("sidebar").style.display = "block";
}
function w3_close(){
	 document.getElementById("sidebar").style.display = "none";
}
</script>
</div>
<div class="details">
	<h2>In our Hostel four types of rooms are available</h2>
	<h3>The details of the fee are:</h3>
	<table border="1">
		<tr>
		<th>ROOM TYPE</th>
		<th>FEE</th>
	    </tr>
	    <tr>
	    	<td>5-Sharing room</td>
	    	<td>5000 Per Head</td>
	    </tr>
	    <tr>
	    	<td>3-Sharing rooom</td>
	    	<td>55,000 Per Head </td>
	    </tr>
	    <tr>
	    	<td>2-Sharing room</td>
	    	<td>60,000 Per Head</td>
	    </tr>
	    <tr>
	    	<td>Single Room</td>
	    	<td>65,000 Per Head</td>
	    </tr>
	</table>
</div><br><br>
</body>
</html>