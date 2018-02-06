<!DOCTYPE Html>
<html>
	<head>

		<title></title>
	<!-- css -->

		<!-- External Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/inputs.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/tables.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- End External Stylesheets -->

		<!-- CDNs -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- End CDNs -->

		<!-- Internal Stylesheets -->
		<style type="text/css">
			th,#timeline td{
				border: solid 1px #555;
			}

		</style>
		<!-- End Internal Stylesheets -->

	<!-- end css -->
	</head>
	<body>
<!-- Main -->	

	<!-- Navbar -->
		<div id="tdow-navbar">
			<img src="../assets/images/logo.jpg" id="tdow-logo">
			<center>
				<div id="company-name">
					The Deals On Wheels<br>
					<span>WorkFlow</span>
				</div>
			</center>
		</div>
	<!-- End Navbar -->


	<!-- Start Form -->
		<form action="" method="post">
	
		<br><br>
	
		<div class="row" style="margin-right:0px;">

	<!-- Timeline -->
	
			<div class="col-md-12 col-sm-12 division" style="text-align:center;">
			<center>
				<table id="timeline">
					<tr>
						<th>Staff Name</th>
						<th>09:00</th>
						<th>09:30</th>
						<th>10:00</th>
						<th>10:30</th>
						<th>11:00</th>
						<th>11:30</th>
						<th>12:00</th>
						<th>12:30</th>
						<th>13:00</th>
						<th>13:30</th>
						<th>14:00</th>
						<th>14:30</th>
						<th>15:00</th>
						<th>15:30</th>
						<th>16:00</th>
						<th>16:30</th>
						<th>17:00</th>
						<th>17:30</th>
						<th>18:00</th>
					</tr>
				</table>
			</center>
			</div>

		</div>
	
	<!-- End Timeline -->

		<br><hr><br><br>

		<!-- Add new Job -->

		<div class="row" style="margin-right:0;">
			<div class="col-md-12 col-sm-12 tdow-modals">
				<center>
					<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#JobModal">
					  <i class="fa fa-plus"></i>&nbsp;Add New Job
					</button>&nbsp;
					<button type="button" class="btn btn-lg btn-primary tdow-buttons" data-toggle="modal" data-target="#CheckStatus">
					  <i class="fa fa-check"></i>&nbsp;Check Status
					</button>
				</center>

				<!-- Modal Job-->
				<div class="modal fade" id="JobModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Job Details</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
					      <table>
					      	    <tr>
					      	    	<td><label for="job-id">JC No. :&nbsp;</label></td>
						      		<td><input id="job-id" type="text" placeholder="Enter Job Card No."></td>
						      	</tr>
						      	<tr>
						      		<td><label for="staff-name">Select Staff:&nbsp;</label></td>
							      	<td>
								      	<select id="staff-name">
								      		<option>Staff Name</option>
								      		<option>Ram</option>
								      		<option>Shyam</option>
								      		<option>Joginder</option>
								      		<option>Brijesh</option>
								      	</select>
								    </td>
								</tr>
						      	<tr>
						      		<td><label for="start-time">Start Time:</label></td>
								    <td>  
								      	<select id="start-time">
								      		<option value="1">09:00</option>
								      		<option value="2">09:30</option>
								      		<option value="3">10:00</option>
								      		<option value="4">10:30</option>
								      		<option value="5">11:00</option>
								      		<option value="6">11:30</option>
								      		<option value="7">12:00</option>
								      		<option value="8">12:30</option>
								      		<option value="9">13:00</option>
								      		<option value="10">13:30</option>
								      		<option value="11">14:00</option>
								      		<option value="12">14:30</option>
								      		<option value="13">15:00</option>
								      		<option value="14">15:30</option>
								      		<option value="15">16:00</option>
								      		<option value="16">16:30</option>
								      		<option value="17">17:00</option>
								      		<option value="18">17:30</option>
								      		<option value="19">18:00</option>
								      	</select>
								    </td>
						      	</tr>
						      	<tr>
						      		<td><label for="end-time">End Time:&nbsp;&nbsp;</label></td>
						      		<td>
								      	<select id="end-time">
								      		<option value="1">09:00</option>
								      		<option value="2">09:30</option>
								      		<option value="3">10:00</option>
								      		<option value="4">10:30</option>
								      		<option value="5">11:00</option>
								      		<option value="6">11:30</option>
								      		<option value="7">12:00</option>
								      		<option value="8">12:30</option>
								      		<option value="9">13:00</option>
								      		<option value="10">13:30</option>
								      		<option value="11">14:00</option>
								      		<option value="12">14:30</option>
								      		<option value="13">15:00</option>
								      		<option value="14">15:30</option>
								      		<option value="15">16:00</option>
								      		<option value="16">16:30</option>
								      		<option value="17">17:00</option>
								      		<option value="18">17:30</option>
								      		<option value="19">18:00</option>
								      	</select>
						      		</td>
						      	</tr>
					      </table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="addNewJob();">Save</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>

		<!-- End Job -->
				<!-- Modal Status-->
				<div class="modal fade" id="CheckStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content" style="width:300%;height:300%;">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Status</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
					      <table id="status-table">
					      		<tr>
						      		<th>
						      			Job No.
						      		</th>
						      		<th>
						      			Staff Name
						      		</th>
						      		<th>
						      			Status
						      		</th>
						      		<th>
						      			Done
						      		</th>
						      		<th>
						      			Delay
						      		</th>
						      		<th>
						      			Remarks
						      		</th>
					      		</tr>
					      </table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="addNewJob();">Save</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>

		<!-- End Status -->

		<br><br>

		<center>
		</center>
		
		</form>
	<!-- Form End -->

<!-- End Main -->

		<br><hr><br>

<!-- Javascript -->

		<!-- Internal Javascript -->

		<script type="text/javascript">
			function openInNewTab(url) {
			  window.location.href = url;
			}

			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) {
			    dd = '0'+dd
			} 

			if(mm<10) {
			    mm = '0'+mm
			} 

			today = dd + '/' + mm + '/' + yyyy;
			//document.getElementById("date").innerHTML = "<center>Date: "+today+"</center>";

			function addNewJob() {
			    var table = document.getElementById("timeline");
			    var status = document.getElementById("status-table");
			    var staff = document.getElementById("staff-name");
			    var st = document.getElementById("start-time");
			    var et = document.getElementById("end-time");
			    var job = document.getElementById("job-id");

			    var row = table.insertRow(1);
			    var rowStatus = status.insertRow(1);

			    var cell0 = row.insertCell(0);
			    cell0.innerHTML = staff.value;

			    var cellStatus0 = rowStatus.insertCell(0);
			    cellStatus0.innerHTML = job.value;

			    var cellStatus1 = rowStatus.insertCell(1);
			    cellStatus1.innerHTML = staff.value;

			    var cellStatus2 = rowStatus.insertCell(2);
			    cellStatus2.innerHTML = "Scheduled";

			    var cellStatus3 = rowStatus.insertCell(3);
			    cellStatus3.innerHTML = "<button type='button' class='btn btn-success'>Done</button>";
			    cellStatus3.id = "done-"+staff.value+job.value;

			    var cellStatus4 = rowStatus.insertCell(4);
			    cellStatus4.innerHTML = "<button type='button' class='btn btn-danger'>Delay</button>";
			    cellStatus4.id = "delay-"+staff.value+job.value;

			    // var cellStatus5 = rowStatus.insertCell(5);
			    // cellStatus2.innerHTML = "<input type='text' placeholder='Enter remarks' id='status-remarks'>&nbsp;<button type='button' class='btn btn-secondary'>Done</button>";


			    var flag = false;
			    var cell;
			    var diff = et-st;
			    for (var i = 1; i < 20; i++) {
			    	cell = row.insertCell(i);
			    	if (i < st.value || i > et.value) {
				    	cell.innerHTML = " ";
			    	}
			    	else{
			    		cell.innerHTML = job.value;
			    	}
			    };

			}
		</script>

		<!-- End Internal Javascript -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>

		<!-- End Extrenal Javascript -->

		<!-- CDNs -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!-- End CDNs -->

<!-- End Javascript -->

	</body>
</html>