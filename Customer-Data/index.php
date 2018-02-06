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
		<!-- End CDNs -->

		<!-- Internal Stylesheets -->
		<style type="text/css">

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
					<span>Customer Data</span>
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
								<td><label for="customer-name">Customer Name:&nbsp;</label></td>
								<td><input type="text" name="customer-name" placeholder="Customer Name"></td>
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
			document.getElementById("date").innerHTML = "<center>Date: "+today+"</center>";


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