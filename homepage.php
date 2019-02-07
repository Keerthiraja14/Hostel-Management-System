<!DOCTYPE html>
<html>
<head>
	<title>HOSTEL MANAGEMENT SYSTEM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="abc.css">
</head>
<body>
  <div class="sidenav">
  <a href="student.php">Search For Students</a>
  <a href="selectroom.html">Book a Room</a>
  <a href="Feedetails.php">Fee Details</a>
</div>
  <div class="main">
<?php include 'header.php'; ?>
<div class="container-fluid"> 
<div class="w3-content w3-section">
  <img class="mySlides w3-animate-fading" src="1.jpg" style="width:100%;height: 300px;">
  <img class="mySlides w3-animate-fading" src="2.jpg" style="width:100%;height: 300px;">
  <img class="mySlides w3-animate-fading" src="3.jpg" style="width:100%;height: 300px;">
</div>
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
<div id="about" class="container-fluid" style="color: white; margin:20px 0px 0px 30px;"><br><br>
  <h2>About:</h2>
  <p>This is located on the road side of Warangal-Hyderabad National Highway.It is in 2000 sqft of area.It is one of the best hostel in Ghatkesar.It provides several facilities.<br>Reason to stay at the hostel is:<br></p>
  <li>Great Accodomation in minimal budget</li>
  <li>Safety</li>
  <li>Best Food</li>
  <li>Good Staff</li>
  <li>Great Serivce</li>

</div><br><br>
<div class="container response" id="contact">
  <h2 style="color:white;">Contact Details:</h2>
  <div class="card">
    <h2>OWNER</h2>
    <img class="card-img-top img-fluid" src="img_avatar1.png" alt="Owner" style="height: 200px;width: 200px">
     <div class="card-body">
      <h4 class="card-title">John Jarvis</h4>
      <p class="card-text" style="color: white;">Sreenidhi Hostels,Ghatkesar</p>
      <p class="card-text" style="color: white;">Contact No:99999999</p>
  </div>
</div><br><br>
<div class="container-fluid branch">
	<h2 class="well text-center" style="color:white">Our Branches:</h2>
	<div class="row">
		<div class="col-lg-6">
			<a href="https://www.google.co.in/maps/place/Ghatkesar/@17.452238,78.6799953,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcb766d9d815ebd:0x8e7516f3445a2014!8m2!3d17.452238!4d78.682184"><img  class="img-fluid" src="h1.jpg" alt="hostel1" style="width: 400px; height: 300px;"></a></div>
		<div class="col-lg-6">
			<a href="https://www.google.co.in/maps/place/Ghatkesar/@17.452238,78.6799953,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcb766d9d815ebd:0x8e7516f3445a2014!8m2!3d17.452238!4d78.682184"><img class="img-fluid" src="h2.jpg" alt="hostel2" style="width:400px; height: 300px;"></a></div>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>