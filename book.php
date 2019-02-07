<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
</head>
<body>
	<form action="#" method="post">
		<input type="button" value="Add student" name="add_btn" class="btn-primary">
		<input type="button" value="Delete Student" name="add_btn" class="btn-primary">
	</form>

</body>
</html>

<?php
	session_start();
	$bookn="";
	$booka="";
	$bookp="";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'ss');

	if (isset($_POST['add_btn'])) {
		
		addbooks();
	}
	if (isset($_POST['delete_btn'])) {
		
		deletebooks();
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['bookn']);
		header("location:login.php");
	}
	function addbooks(){
		global $db, $errors;

		$bookn    =  e($_POST['bookn']);
		$booka      =  e($_POST['booka']);
		$bookp  =  e($_POST['bookp']);
		if (empty($bookn)) { 
			array_push($errors, "bookn is required"); 
		}
		if (empty($booka)) { 
			array_push($errors, "booka is required"); 
		}
		if (empty($bookp)) { 
			array_push($errors, "bookp is required"); 
		}
		$query = "INSERT INTO book (bookn,booka,bookp) 
						  VALUES('$bookn', '$booka', '$bookp')";
		mysqli_query($db, $query);
		$_SESSION['success']  = "New user successfully created!!";
		header('location: booklist1.php');
	}
	function deletebooks(){
		global $db, $errors;

		$bookn    =  e($_POST['bookn']);
		$booka      =  e($_POST['booka']);
		$bookp  =  e($_POST['bookp']);
		if (empty($bookn)) { 
			array_push($errors, "bookn is required"); 
		}
		if (empty($booka)) { 
			array_push($errors, "booka is required"); 
		}
		if (empty($bookp)) { 
			array_push($errors, "bookp is required"); 
		}
		$query = "DELETE FROM book WHERE bookn='$bookn';";
		mysqli_query($db, $query);
		$_SESSION['success']  = "New user successfully created!!";
		header('location: booklist1.php');
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