<?php
$conn = mysqli_connect("localhost","root","","social_network");

if (!$conn) {
	# code...
	echo "Connection error" .mysqli_error();
}

?>