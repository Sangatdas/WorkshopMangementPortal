<?php
	
	$view = $_POST["v"];
	$date = $_POST["d"];

	if ($view === "day") {
		# code...
		echo "<table>
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
		echo "<table>
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
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
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
				<tr>
					<th class='report-th'>Total Amount</th>
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
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
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
				<tr>
					<th class='report-th'>Total Amount</th>
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
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
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
				<tr>
					<th class='report-th'>Total Amount</th>
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
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
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
				<tr>
					<th class='report-th'>Total Amount</th>
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
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
					<td class='report-td'></td>
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
				<tr>
					<th class='report-th'>Total Amount</th>
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
		echo "<table>
					<thead><h3><strong>Sales of Month</strong></h3></thead>
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