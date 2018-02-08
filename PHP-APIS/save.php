<?php include 'db-connect.php'; ?>
<?php
	$dt = $_POST["dt"];
	$bc = $_POST["bc"];
	$jc = $_POST["jc"];
	$cn = $_POST["cn"];
	$ca = $_POST["ca"];
	$cp1 = $_POST["cp1"];
	$cp2 = $_POST["cp2"];
	$ce = $_POST["ce"];
	$rno = $_POST["rno"];
	$cno = $_POST["cno"];
	$mno = $_POST["mno"];
	$v = $_POST["v"];
	$ta = $_POST["ta"];

	print_r($_POST);
	// $cust_last_id;
	// $sql = "INSERT INTO Customer (id, Name, Address, Mob1, Mob2, Email)
	// VALUES (null, '".mysqli_real_escape_string($conn, $cn)."', '".mysqli_real_escape_string($conn, $ca)."', '".mysqli_real_escape_string($conn, $cp1)."', '".mysqli_real_escape_string($conn, $cp2)."', '".mysqli_real_escape_string($conn, $ce)."')";

	// if ($conn->query($sql) === TRUE) {
	//     $cust_last_id = $conn->insert_id;
	//     echo "New record created successfully. Last inserted ID is: " . $last_id;
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	// $conn->close();	
?>