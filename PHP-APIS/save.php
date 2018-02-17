<?php include 'db-connect.php'; ?>
<?php
	session_start();
	$dt = $_POST["dt"];
	// $bc = $_POST["bc"];
	$jc = $_SESSION["jc-no"];
	$cn = $_SESSION["designation"]." ".$_SESSION["customer-fname"]." ".$_SESSION["customer-mname"]." ".$_SESSION["customer-lname"];
	$ca = $_SESSION["customer-address"];
	$cp1 = $_SESSION["customer-ph-1"];
	$cp2 = $_SESSION["customer-ph-2"];
	$ce = $_SESSION["customer-email"];
	$rno = $_SESSION["reg-no"];
	$cno = $_SESSION["chassis-no"];
	$mno = $_SESSION["model-no"];
	$v = $_SESSION["vehicle"];
	
	$ep = $_POST["ep"];
	$fd = $_POST["fd"];
	$cc = $_POST["cc"];
	$h = $_POST["h"];
	$wrp = $_POST["wrp"];
	$mr = $_POST["mr"];
	$pj = $_POST["pj"];
	$ta = $_POST["ta"];

	// print_r($_POST);
	$cust_last_id;
	$vehicle_last_id;
	$flag1 = false;
	$flag2 = false;
	$flag3 = false;
	$sql = "INSERT INTO Customer (id, Name, Address, Mob1, Mob2, Email)
	VALUES (null, '".mysqli_real_escape_string($conn, $cn)."', '".mysqli_real_escape_string($conn, $ca)."', '".mysqli_real_escape_string($conn, $cp1)."', '".mysqli_real_escape_string($conn, $cp2)."', '".mysqli_real_escape_string($conn, $ce)."')";

	if ($conn->query($sql) === TRUE) {
	    $cust_last_id = $conn->insert_id;
	    $flag1 = true;
	} else {
	    $flag1 = false;
	}
	$sql = "INSERT INTO Vehicle (id, RegistrationNo, ChassisNo, ModelNo, Type, customerid)
	VALUES (null, '".mysqli_real_escape_string($conn, $rno)."', '".mysqli_real_escape_string($conn, $cno)."', '".mysqli_real_escape_string($conn, $mno)."', '".mysqli_real_escape_string($conn, $v)."', '".mysqli_real_escape_string($conn, $cust_last_id)."')";

	if ($conn->query($sql) === TRUE) {
	    $vehicle_last_id = $conn->insert_id;
	    $flag2 = true;
	} else {
	    $flag2 = false;
	}
	$sql = "INSERT INTO JobCard (id, JCno, Branch, dt, vehicleno, customerno, EP, FD, CC, H, WRP, MR, PJ, Amount)
	VALUES (null, '".mysqli_real_escape_string($conn, $jc)."', '".mysqli_real_escape_string($conn, $jc[0])."',
	 '".mysqli_real_escape_string($conn, $dt)."', '".mysqli_real_escape_string($conn, $vehicle_last_id)."', 
	 '".mysqli_real_escape_string($conn, $cust_last_id)."', '".mysqli_real_escape_string($conn, $ep)."', 
	 '".mysqli_real_escape_string($conn, $fd)."', '".mysqli_real_escape_string($conn, $cc)."', 
	 '".mysqli_real_escape_string($conn, $h)."', '".mysqli_real_escape_string($conn, $wrp)."', 
	 '".mysqli_real_escape_string($conn, $mr)."', '".mysqli_real_escape_string($conn, $pj)."', 
	 '".mysqli_real_escape_string($conn, $ta)."')";

	if ($conn->query($sql) === TRUE) {
	    $flag3 = true;
	} else {
	    $flag3 = false;
	}

	if ($flag1 == true && $flag2 == true && $flag3 == true) {
		# code...
		echo "Success";
	}
	else
	{
		echo "Unsuccess";
	}

	$conn->close();	
?>