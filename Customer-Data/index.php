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


			<!-- Start Form -->
				<form method="post">
			

				<br><br>
			
				<div class="row" style="margin-right:0px;">

			<!-- Customer Details	 -->
			
					<div class="col-md-6 col-sm-12 division" style="text-align:center;">
						<div class="division-title">
							<h1>Customer Details</h1>
						</div>
						<p>
							<center>
								<table>
									<tr>
										<td><label for="designation">Designation:&nbsp;</label></td>
										<td>
											<select name="designation">
												<option value="Mr.">Mr.</option>
												<option value="Mrs.">Mrs.</option>
												<option value="M/s">M/s</option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="customer-fname">First Name:&nbsp;</label></td>
										<td><input type="text" name="customer-fname" placeholder="First Name"></td>
									</tr>
									<tr>
									<tr>
										<td><label for="customer-mname">Middle Name:&nbsp;</label></td>
										<td><input type="text" name="customer-mname" placeholder="Middle Name"></td>
									</tr>
									<tr>
										<td><label for="customer-lname">Last Name:&nbsp;</label></td>
										<td><input type="text" name="customer-lname" placeholder="Last Name"></td>
									</tr>
									<tr>
										<td><label for="customer-address">Customer Address:&nbsp;</label></td>
										<td><textarea style="resize:none;" name="customer-address" placeholder="Address of Customer"></textarea></td>
									</tr>
									<tr>
										<td><label for="customer-ph-1">Mobile Number 1:&nbsp;</label></td>
										<td><input type="text" name="customer-ph-1" placeholder="Mobile Number"></td>
									</tr>
									<tr>
										<td><label for="customer-ph-2">Mobile Number 2:&nbsp;</label></td>
										<td><input type="text" name="customer-ph-2" placeholder="Mobile Number"></td>
									</tr>
									<tr>
										<td><label for="customer-email">Email Address:&nbsp;</label></td>
										<td><input type="email" name="customer-email" placeholder="Customer Email"></td>
									</tr>
								</table>
							</center>
						</p>
					</div>
			
			<!-- End Customer Details -->

			<!-- Vehicle Details -->

					<div class="col-md-6 col-sm-12">
						<div class="division-title" style="text-align:center;">
							<h1>Vehicle Details</h1>
						</div>
						<p>
							<center>
									<table>
										<tr>
											<td><label for="reg-no">Registration No. :&nbsp;</label></td>
											<td><input type="text" name="reg-no" placeholder="Registration No."></td>
										</tr>
										<tr>
											<td><label for="chassis-no">Chassis No. :&nbsp;</label></td>
											<td><input type="text" name="chassis-no" placeholder="Chassis No."></td>
										</tr>
										<tr>
											<td><label for="model-no">Model No. :&nbsp;</label></td>
											<td><input type="text" name="model-no" placeholder="Model no."></td>
										</tr>
										<tr>
											<td><label for="vehicle">Vehicle Type:&nbsp;</label></td>
											<td>
												<input type="radio" name="vehicle" value="Car">&nbsp;Car
												<input type="radio" name="vehicle" value="Bike">&nbsp;Bike
											</td>
										</tr>
										<tr>
											<td><label for="location">Select location:</label></td>
											<td>
												<select name="location" id="location">
													<option value="B">Bavdhan</option>
													<option value="S">Solaris</option>
													<option value="T">Third</option>
												</select>
											</td>
										</tr>										
									</table>
							</center>
						</p>
					</div>
				</div>

				<br><hr><br>

				<!-- End Vehicle Details -->

				<center>
					<input type="submit" class="btn-dark" value="Save" style="width:200px;font-weight:bold;" formaction="../PHP-APIS/reg-customer.php">
				</center>
				
				</form>
			<!-- Form End -->
				<br>
			<!-- system dashboard -->
			</div>
		</div>



	<!-- Start Form -->

<!-- End Main -->


<!-- Javascript -->

		<!-- Internal Javascript -->

		<script type="text/javascript">
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