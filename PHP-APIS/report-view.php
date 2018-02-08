<?php include 'utilities.php' ?>
<?php
	
	$view = $_POST["v"];
	$date = $_POST["d"];

	$time = strtotime($date);
	$month = date("F", $time);
	$year = date("Y", $time);
	$day = date("D", $time);

	if ($view === "day") {
		# code...
		echo "<h3><strong>".$day." ".$date."</strong></h3>
			<table>
					<tr>
						<th class='report-th'>Services</th>
						<td class='report-th'>Exterior Polishing</td>
						<td class='report-th'>Full Detailing</td>
						<td class='report-th'>Ceramic Coating</td>
						<td class='report-th'>Hydrographic</td>
						<td class='report-th'>Wheel Rim Painting</td>
						<td class='report-th'>Mechanic repair</td>
						<td class='report-th'>Painting Jobs</td>
						<td class='report-th'>Total Amount</td>
					</tr>
					<tr>
						<th class='report-th'>Amounts</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
			</table>";
	} 
	else if ($view === "month") {
		# code...
		$month_begin = date('Y-m-01', $time);
		$month_end = date('Y-m-t', $time);
		$num = getDayNumber($month_begin);
		$range = createDateRange("".$month_begin, "".$month_end);
		$cal = [];

		for ($i=0; $i < 35; $i++) { 
			# code...
			$cal[$i] = "";
		}
		$j = 0;
		for ($i=$num-1; $i < count($range); $i++) { 
			# code...
			$cal[$i] = $range[$j];
			$j++;
		}
		echo "<h3><strong>".$month." ".$year."</strong></h3>
			<table>
				<thead><h3><strong>Revenue of Week 1</strong></h3></thead>
				<tr>
					<th class='report-th'>Services</th>
					<th class='report-th'>Monday</th>
					<th class='report-th'>Tuesday</th>
					<th class='report-th'>Wednesday</th>
					<th class='report-th'>Thursday</th>
					<th class='report-th'>Friday</th>
					<th class='report-th'>Saturday</th>
					<th class='report-th'>Sunday</th>
				</tr>
				<tr>
					<th class='report-th'>Date</th>
					<td class='report-td'>".$cal[0]."</td>
					<td class='report-td'>".$cal[1]."</td>
					<td class='report-td'>".$cal[2]."</td>
					<td class='report-td'>".$cal[3]."</td>
					<td class='report-td'>".$cal[4]."</td>
					<td class='report-td'>".$cal[5]."</td>
					<td class='report-td'>".$cal[6]."</td>
				</tr>
				<tr>
					<th class='report-th'>Exterior Polishing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Full Detailing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Ceramic Coating</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Hydrographic</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Wheel Rim Painting</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Mechanic repair</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Painting Jobs</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
			</table>
			<table>
				<thead><h3><strong>Revenue of Week 2</strong></h3></thead>
				<tr>
					<th class='report-th'>Services</th>
					<th class='report-th'>Monday</th>
					<th class='report-th'>Tuesday</th>
					<th class='report-th'>Wednesday</th>
					<th class='report-th'>Thursday</th>
					<th class='report-th'>Friday</th>
					<th class='report-th'>Saturday</th>
					<th class='report-th'>Sunday</th>
				</tr>
				<tr>
					<th class='report-th'>Date</th>
					<td class='report-td'>".$cal[7]."</td>
					<td class='report-td'>".$cal[8]."</td>
					<td class='report-td'>".$cal[9]."</td>
					<td class='report-td'>".$cal[10]."</td>
					<td class='report-td'>".$cal[11]."</td>
					<td class='report-td'>".$cal[12]."</td>
					<td class='report-td'>".$cal[13]."</td>
				</tr>
				<tr>
					<th class='report-th'>Exterior Polishing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Full Detailing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Ceramic Coating</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Hydrographic</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Wheel Rim Painting</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Mechanic repair</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Painting Jobs</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
			</table>
			<table>
				<thead><h3><strong>Revenue of Week 3</strong></h3></thead>
				<tr>
					<th class='report-th'>Services</th>
					<th class='report-th'>Monday</th>
					<th class='report-th'>Tuesday</th>
					<th class='report-th'>Wednesday</th>
					<th class='report-th'>Thursday</th>
					<th class='report-th'>Friday</th>
					<th class='report-th'>Saturday</th>
					<th class='report-th'>Sunday</th>
				</tr>
				<tr>
					<th class='report-th'>Date</th>
					<td class='report-td'>".$cal[14]."</td>
					<td class='report-td'>".$cal[15]."</td>
					<td class='report-td'>".$cal[16]."</td>
					<td class='report-td'>".$cal[17]."</td>
					<td class='report-td'>".$cal[18]."</td>
					<td class='report-td'>".$cal[19]."</td>
					<td class='report-td'>".$cal[20]."</td>
				</tr>
				<tr>
					<th class='report-th'>Exterior Polishing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Full Detailing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Ceramic Coating</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Hydrographic</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Wheel Rim Painting</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Mechanic repair</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Painting Jobs</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
			</table>
			<table>
				<thead><h3><strong>Revenue of Week 4</strong></h3></thead>
				<tr>
					<th class='report-th'>Services</th>
					<th class='report-th'>Monday</th>
					<th class='report-th'>Tuesday</th>
					<th class='report-th'>Wednesday</th>
					<th class='report-th'>Thursday</th>
					<th class='report-th'>Friday</th>
					<th class='report-th'>Saturday</th>
					<th class='report-th'>Sunday</th>
				</tr>
				<tr>
					<th class='report-th'>Date</th>
					<td class='report-td'>".$cal[21]."</td>
					<td class='report-td'>".$cal[22]."</td>
					<td class='report-td'>".$cal[23]."</td>
					<td class='report-td'>".$cal[24]."</td>
					<td class='report-td'>".$cal[25]."</td>
					<td class='report-td'>".$cal[26]."</td>
					<td class='report-td'>".$cal[27]."</td>
				</tr>
				<tr>
					<th class='report-th'>Exterior Polishing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Full Detailing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Ceramic Coating</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Hydrographic</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Wheel Rim Painting</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Mechanic repair</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Painting Jobs</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
			</table>
			<table>
				<thead><h3><strong>Revenue of Week 5</strong></h3></thead>
				<tr>
					<th class='report-th'>Services</th>
					<th class='report-th'>Monday</th>
					<th class='report-th'>Tuesday</th>
					<th class='report-th'>Wednesday</th>
					<th class='report-th'>Thursday</th>
					<th class='report-th'>Friday</th>
					<th class='report-th'>Saturday</th>
					<th class='report-th'>Sunday</th>
				</tr>
				<tr>
					<th class='report-th'>Date</th>
					<td class='report-td'>".$cal[28]."</td>
					<td class='report-td'>".$cal[29]."</td>
					<td class='report-td'>".$cal[30]."</td>
					<td class='report-td'>".$cal[31]."</td>
					<td class='report-td'>".$cal[32]."</td>
					<td class='report-td'>".$cal[33]."</td>
					<td class='report-td'>".$cal[34]."</td>
				</tr>
				<tr>
					<th class='report-th'>Exterior Polishing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Full Detailing</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Ceramic Coating</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Hydrographic</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Wheel Rim Painting</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Mechanic repair</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
				<tr>
					<th class='report-th'>Painting Jobs</th>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
				</tr>
			</table>
			<table>
					<tr>
						<th class='report-th'>Services</th>
						<td class='report-th'>Exterior Polishing</td>
						<td class='report-th'>Full Detailing</td>
						<td class='report-th'>Ceramic Coating</td>
						<td class='report-th'>Hydrographic</td>
						<td class='report-th'>Wheel Rim Painting</td>
						<td class='report-th'>Mechanic repair</td>
						<td class='report-th'>Painting Jobs</td>
						<td class='report-th'>Total Amount</td>
					</tr>
					<tr>
						<th class='report-th'>Amounts</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
			</table>";

	} 
	else if ($view === "year") {
		# code...
		echo "<h3><strong>".$year."</strong></h3>
			<table>
					<thead><h3><strong>Sales of Year</strong></h3></thead>
					<tr>
						<th class='report-th'>Services</th>
						<th class='report-th'>Jan</th>
						<th class='report-th'>Feb</th>
						<th class='report-th'>Mar</th>
						<th class='report-th'>Apr</th>
						<th class='report-th'>May</th>
						<th class='report-th'>Jun</th>
						<th class='report-th'>Jul</th>
						<th class='report-th'>Aug</th>
						<th class='report-th'>Sep</th>
						<th class='report-th'>Oct</th>
						<th class='report-th'>Nov</th>
						<th class='report-th'>Dec</th>
					</tr>
					<tr>
						<th class='report-th'>Exterior Polishing</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Full Detailing</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Ceramic Coating</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Hydrographic</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Wheel Rim Painting</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Mechanic repair</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Painting Jobs</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
					<tr>
						<th class='report-th'>Total Amount</th>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
						<td class='report-td'></td>
					</tr>
			</table>";
	}
	

?>