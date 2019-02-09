<?php
session_start();

include("includes/connection.php");

	if (isset($_POST['login'])) {
		
		$username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
		$password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));

		$select_user = "select * from users where username = '$username' AND password = '$password' AND status = 'verified' ";

		$query = mysqli_query($conn,$select_user);
		$check_user = mysqli_num_rows($query);

		if ($check_user == 1) {
			
			$_SESSION['username'] = $username;

			echo "<script>window.open('home.php' , '_self')</script>";
		}else{
			echo "<script>alert('Your username or password is incorrect!')</script>";
		}

	}


?>