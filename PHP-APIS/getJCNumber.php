<?php include "db-connect.php" ?>
<?php
	$sql = "SELECT id FROM JobCard";

	$result = $conn->query($sql);

	$nr = mysqli_num_rows($result);

	echo $_POST["bc"].$nr;
?>