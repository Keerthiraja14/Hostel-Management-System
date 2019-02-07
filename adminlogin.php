<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="icon" type="image/png" href="p1/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="p1/css/util.css">
  <link rel="stylesheet" type="text/css" href="p1/css/head.css">
  <link rel="stylesheet" type="text/css" href="p1/css/main.css">

</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(p1.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>
        <form class="login100-form validate-form" method="post" action="adminlogin.php" name="aform" target="_top">
          <?php include('errors.php'); ?>
          <div class="wrap-input100 validate-input m-b-26" data-validate="id is required">
            <span class="label-input100">Id</span>
            <input class="input100" type="text" name="id" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

            <br>
            <br>
          <div class="flex-sb-m w-full p-b-30">
            
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="login_btn">
              Login
            </button>&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>