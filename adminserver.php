<?php 
	session_start();

	// variable declaration
	$id = "";
	$password    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'asignupdb');

	// REGISTER USER
	if (isset($_POST['login_btn'])) {
		
		login();
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['id']);
		header("location: ../adminlogin.php");
	}
	function login(){
		global $db, $id, $password, $errors;

		// grap form values
		$id = e($_POST['id']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($id)) {
			echo "<script language=\"JavaScript\">\n";
			echo "alert('id was incorrect!');\n";
			echo "</script>";
		}
		if (empty($password)) {
			echo "<script language=\"JavaScript\">\n";
			echo "alert('password was incorrect!');\n";
			echo "</script>";
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE id='$id' AND password='$password'LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: adminbooks.html');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: adminbooks.html');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>