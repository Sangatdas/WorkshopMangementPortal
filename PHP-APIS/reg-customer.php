<?php include "db-connect.php" ?>
<?php
session_start();

$sql = "SELECT JCNo FROM JobCard ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

$tup = $result->fetch_assoc();

$jc = $tup["JCNo"];

preg_match_all('!\d+!', $jc, $matches);

$nr = $matches[0][0] + 1;

$_SESSION["jc-no"] = $_POST["location"].$nr;


$_SESSION["customer-fname"] = $_POST["customer-fname"];
$_SESSION["customer-mname"] = $_POST["customer-mname"];
$_SESSION["customer-lname"] = $_POST["customer-lname"];
$_SESSION["designation"] = $_POST["designation"];

$_SESSION["customer-address"] = $_POST["customer-address"];
$_SESSION["customer-ph-1"] = $_POST["customer-ph-1"];
$_SESSION["customer-ph-2"] = $_POST["customer-ph-2"];
$_SESSION["customer-email"] = $_POST["customer-email"];

$_SESSION["reg-no"] = $_POST["reg-no"];
$_SESSION["chassis-no"] = $_POST["chassis-no"];
$_SESSION["model-no"] = $_POST["model-no"];
$_SESSION["vehicle"] = $_POST["vehicle"];

if ($_SESSION["vehicle"] == "Car") {
	# code...
	header("Location: ../JobCardCar/");
}
elseif ($_SESSION["vehicle"] == "Bike") {
	# code...
	header("Location: ../JobCardBike/");	
}


?>