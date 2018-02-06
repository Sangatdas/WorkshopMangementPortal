<?php

session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["lat"] = $_POST["lat"];

header("Location: ../Management/");

?>