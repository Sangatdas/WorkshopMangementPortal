<?php

session_start();

$_SESSION["customer-name"] = $_POST["customer-name"];
$_SESSION["customer-address"] = $_POST["customer-address"];
$_SESSION["customer-ph-1"] = $_POST["customer-ph-1"];
$_SESSION["customer-ph-2"] = $_POST["customer-ph-2"];
$_SESSION["customer-email"] = $_POST["customer-email"];

$_SESSION["reg-no"] = $_POST["reg-no"];
$_SESSION["chassis-no"] = $_POST["chassis-no"];
$_SESSION["model-no"] = $_POST["model-no"];
$_SESSION["vehicle"] = $_POST["vehicle"];

header("Location: ../JobCard/");

?>