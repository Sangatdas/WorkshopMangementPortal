<?php
function createDateRange($startDate, $endDate, $format = "Y-m-d") { 

	$begin = new DateTime($startDate);
	$end = new DateTime($endDate);
	$interval = new DateInterval('P1D'); // 1 Day
	$dateRange = new DatePeriod($begin, $interval, $end);
	$range = []; 
	foreach ($dateRange as $date) { 
		$range[] = $date->format("d-m-Y");
	} 
	return $range;
}
function getDayNumber($startDate, $format = "Y-m-d") {
	$time = strtotime($startDate);
	$day = date("D", $time);

	switch ($day) {
		case 'Mon':
			# code...
			return 1;
			break;
		case 'Tue':
			# code...
			return 2;
			break;
		case 'Wed':
			# code...
			return 3;
			break;
		case 'Thu':
			# code...
			return 4;
			break;
		case 'Fri':
			# code...
			return 5;
			break;
		case 'Sat':
			# code...
			return 6;
			break;
		case 'Sun':
			# code...
			return 7;
			break;
		
		default:
			# code...
			return 0;
			break;
	}
}
?>