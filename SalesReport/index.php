<?php
 session_start(); 
?>
<!DOCTYPE Html>
<html>
	<head>

		<title></title>
	<!-- css -->

		<!-- External Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/inputs.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/tables.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- End External Stylesheets -->

		<!-- CDNs -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

		<!-- End CDNs -->

		<!-- Internal Stylesheets -->
		<style type="text/css">
			.report-th{
				background-color: rgb(35,39,43);
				color: white;
				font-weight: bold;
				border: solid 1px white;
			}
			.report-td{
				background-color: white;
				color: black;
				border: solid 1px black;
			}
		</style>
		<!-- End Internal Stylesheets -->
	<!-- end css -->
	</head>
	<body>
<!-- Main -->	
	<div class="row" style="margin-right:0;">
		<div class="col-md-2" style="margin:0;padding:0;">
			<div id="menu">
				<div style="margin-top:0;">Menu</div>
				<div><i class="fas fa-plus"></i> Add New Customer</div>
				<div><i class="fas fa-search"></i> Find Existing Customer</div>
				<div><i class="fa fa-id-card"></i> Create New JobCard</div>
				<div><i class="fa fa-money-bill-alt"></i> Accounts</div>
				<div><i class="fa fa-user"></i> HR</div>
				<div><i class="fa fa-shopping-cart"></i> Purchase</div>
				<div><i class="fab fa-wpforms"></i> Forms</div>
				<div><i class="fas fa-tasks"></i> Workflow Status</div>
				<div><i class="fa fa-chart-line"></i> Sales Report</div>
				<div><i class="fas fa-chart-bar"></i> Purchase Report</div>
				<div><i class="fab fa-amazon-pay"></i> Payables</div>
				<div><i class="fas fa-chart-area"></i> Stock</div>
				<div><i class="far fa-money-bill-alt"></i> Receivables</div>
				<div><i class="fas fa-balance-scale"></i> Sales Vs Actual</div>
				<div><i class="fas fa-cogs"></i> Workshop Productivity</div>
			</div>
		</div>
		<div class="col-md-10" style="margin:0;padding:0;">
			<!-- Navbar -->
				<div id="tdow-navbar">
					<center>
						<div id="company-name">
							<img src="../assets/images/logo.jpg" id="tdow-logo">
							The Deals On Wheels<br>
							<!-- <span>Login</span> -->
						</div>
					</center>
				</div>
			<!-- End Navbar -->


			<!-- Start Form -->
				<br><br><br><br>
				<!-- Subnav -->
				<div class="row" style="margin-right:0;">
					<div class="col-md-4 col-sm-12" id="date-picker">
						<center>
			            	<p>Select Date:&nbsp; <input type="text" id="datepicker"></p>
			            </center>
					</div>
					<div class="col-md-4 col-sm-12" id="radio-options">
						<center>
							<label><h3><b>Select View</b></h3></label><br>
							<input type="radio" name="view" id="day" value="day">
							<label for="day">By date</label>
							<input type="radio" name="view" id="month" value="month">
							<label for="day">By month</label>
							<input type="radio" name="view" id="year" value="year">
							<label for="day">By year</label>
						</center>
					</div>
					<div class="col-md-4 col-sm-12" id="view-changing-button">
						<center>
							<button type="button" class="btn btn-lg btn-dark tdow-buttons" id="change-view">
							  Change View
							</button>
						</center>
					</div>
				</div>
				<!-- End Subnav -->

			<!-- Start Table -->
				<br><br>
				<center>
					<div id="report-tables">
					</div>

					<div class="chart-container col-md-6 col-sm-12" style="position:relative;">
						<canvas id="myChart"></canvas>
					</div>
				</center>
			
			<!-- End Table -->

			<!-- system dashboard -->
			</div>
		</div>


<!-- End Main -->

		<br><hr><br>

<!-- Javascript -->
		<!-- CDNs -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

		<!-- End CDNs -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>
		<script src="../assets/js/tdow-commons.js"></script>

		<!-- End Extrenal Javascript -->

		<!-- Internal Javascript -->

		<script type="text/javascript">
		  $(document).ready(function() {
		    $("#datepicker").datepicker();
		    $("#change-view").click(function(event){
		    	var date = $("#datepicker").val();
		    	$.post("../PHP-APIS/report-view.php",{
		    		d: date,
		    		v: $("[name='view']:checked").val()
		    	},
		    	function(data, status) {
		    		$("#report-tables").html(data);
		    	});
		    });
		  });
		</script>
		<!-- End Internal Javascript -->



<!-- End Javascript -->

	</body>
</html>