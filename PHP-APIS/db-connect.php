<?php

	$conn = new mysqli("localhost", "root", "", "tdow-management");
	if ($conn->connect_error) {
		# code...
		die("Connection Failed: ".$conn->connect_error);
	}
?>