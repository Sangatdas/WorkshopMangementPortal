<?php 
	session_start(); 
	if (isset($_SESSION["lat"])) {
		# code...
		if($_SESSION["lat"] === "Admin")
			$admin = "disabled";

		elseif ($_SESSION["lat"] == "Manager") {
			# code...
			$manager = "disabled";
		}
		elseif ($_SESSION["lat"] == "Acoounts") {
			# code...
			$accounts = "disbled";
		}

	}
?>
<!DOCTYPE Html>
<html>
	<head>

		<title></title>
	<!-- css -->

		<!-- External Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/inputs.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- End External Stylesheets -->

		<!-- CDNs -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<!-- End CDNs -->

		<!-- Internal Stylesheets -->
		<style type="text/css">

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
				<div><a href="../Find/"><i class="fas fa-search"></i> Find Existing Customer</a></div>
				<div><a href="../Customer-Data/"><i class="fa fa-id-card"></i> Create New JobCard</a></div>
				<div><a href="../Accounts/"><i class="fa fa-money-bill-alt"></i> Accounts</a></div>
				<div><a href="../HR/"><i class="fa fa-user"></i> HR</a></div>
				<div><a href="../Purchase/"><i class="fa fa-shopping-cart"></i> Purchase</a></div>
				<div><a href="../Forms/"><i class="fab fa-wpforms"></i> Forms</a></div>
				<div><a href="../WorkFlow/"><i class="fas fa-tasks"></i> Workflow Status</a></div>
				<div><a href="../SalesReport/"><i class="fa fa-chart-line"></i> Sales Report</a></div>
				<div><a href="../PurchaseReport/"><i class="fas fa-chart-bar"></i> Purchase Report</a></div>
				<div><a href="../Payables/"><i class="fab fa-amazon-pay"></i> Payables</a></div>
				<div><a href="../Stock/"><i class="fas fa-chart-area"></i> Stock</a></div>
				<div><a href="../Receivables/"><i class="far fa-money-bill-alt"></i> Receivables</a></div>
				<div><a href="../SalesVsActual/"><i class="fas fa-balance-scale"></i> Sales Vs Actual</a></div>
				<div><a href="../Productivity/"><i class="fas fa-cogs"></i> Workshop Productivity</a></div>
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

				<br><hr><br>
				<br><br><br><br>
				
				<center><h1>Welcome To TDOW Dashboard</h1></center>

			<!-- Start Form -->

			<!-- system dashboard -->
			</div>
		</div>
<!-- End Main -->


<!-- Javascript -->

		<!-- Internal Javascript -->

		<script type="text/javascript">

		</script>

		<!-- End Internal Javascript -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>
		<script type="text/javascript" src="../assets/js/tdow-commons.js"></script>

		<!-- End Extrenal Javascript -->

		<!-- CDNs -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!-- End CDNs -->

<!-- End Javascript -->

	</body>
</html>