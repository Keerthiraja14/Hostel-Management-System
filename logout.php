<?php
   session_destroy();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
     echo '<script language="javascript">';
	   echo 'alert("You are successfully logged out")';
       echo '</script>';
   header('Refresh: 0; URL = login.php');
?>