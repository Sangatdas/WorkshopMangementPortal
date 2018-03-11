<?php include "db-connect.php" ?>
<?php
	$sql = "SELECT JCNo FROM JobCard ORDER BY id DESC LIMIT 1";

	$result = $conn->query($sql);

	$tup = $result->fetch_assoc();

	$jc = $tup["JCNo"];

	preg_match_all('!\d+!', $jc, $matches);

 	echo $matches[0][0];

	// echo $_POST["bc"].$nr;
?>