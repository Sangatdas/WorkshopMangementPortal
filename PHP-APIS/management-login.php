<?php include 'db-connect.php';?>
<?php

	$user = $_POST["uname"];
	$password = $_POST["pswd"];
	$loginAt = $_POST["lat"];

	$sql = "SELECT Username, Password FROM $loginAt WHERE Username='".mysqli_real_escape_string($conn,$user)."' AND Password='".mysqli_real_escape_string($conn,$password)."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	echo "Login Success";
	} 
	else {
    	echo "Wrong Username or password";
	}

	$conn->close();

?>
