<?php
include("includes/connection.php");


	if (isset($_POST['sign_up'])) {
		# code...

		$firstname = htmlentities(mysqli_real_escape_string($conn, $_POST['firstname']));
		$lastname = htmlentities(mysqli_real_escape_string($conn, $_POST['lastname']));
	}

?>