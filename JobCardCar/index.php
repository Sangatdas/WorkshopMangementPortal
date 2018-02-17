<?php
 session_start(); 
 if (!isset($_SESSION['designation'])) {
 	# code...
 	$_SESSION['designation'] = "";
 }
 if (!isset($_SESSION['customer-fname'])) {
 	# code...
 	$_SESSION['customer-fname'] = "";
 }
 if (!isset($_SESSION['customer-mname'])) {
 	# code...
 	$_SESSION['customer-mname'] = "";
 }
 if (!isset($_SESSION['customer-lname'])) {
 	# code...
 	$_SESSION['customer-lname'] = "";
 }
  if (!isset($_SESSION['customer-address'])) {
 	# code...
 	$_SESSION['customer-address'] = "";
 }
 if (!isset($_SESSION['customer-ph-1'])) {
 	# code...
 	$_SESSION['customer-ph-1'] = "";
 }
 if (!isset($_SESSION['customer-ph-2'])) {
 	# code...
 	$_SESSION['customer-ph-2'] = "";
 }
 if (!isset($_SESSION['customer-email'])) {
 	# code...
 	$_SESSION['customer-email'] = "";
 }
 if (!isset($_SESSION['reg-no'])) {
 	# code...
 	$_SESSION['reg-no'] = "";
 }
 if (!isset($_SESSION['chassis-no'])) {
 	# code...
 	$_SESSION['chassis-no'] = "";
 }
 if (!isset($_SESSION['model-no'])) {
 	# code...
 	$_SESSION['model-no'] = "";
 }
 if (!isset($_SESSION['vehicle'])) {
 	# code...
 	$_SESSION['vehicle'] = "";
 }
 if (!isset($_SESSION['jc-no'])) {
 	# code...
 	$_SESSION['jc-no'] = "";
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

			.tdow-modals{
				text-align: center;
			}

			.tdow-buttons{
				margin: 20px;
				width: 250px;
			}
			.tdow-check{
				border-color: red;
				background-color: rgb(153,156,159);
				border-radius: 3px;
				padding: 10px;
			}
			.modal-body{
				text-align: justify;
			}
			.hidden{
				display: none;
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
		<form action="" method="post">
	
	<!-- Subnav -->
		<div id="tdow-subnav" class="row" style="margin-right:0px;">
			<div id="date" class="col-md-6 col-sm-6"></div>
			<div id="jc-no" class="col-md-5 col-sm-5"><center>Job Card No. <span><?php echo $_SESSION["jc-no"]; ?></span></center></div>
		</div>
	<!-- End Subnav -->

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
								<td><div id="cust-name"><?php echo $_SESSION["designation"]." ".$_SESSION["customer-fname"]." ".$_SESSION["customer-mname"]." ".$_SESSION["customer-lname"];?></div></td>
							</tr>
							<tr>
								<td><label for="customer-address">Customer Address:&nbsp;</label></td>
								<td><div id="cust-addr"><?php echo $_SESSION["customer-address"];?></div></td>
							</tr>
							<tr>
								<td><label for="customer-ph-1">Mobile Number 1:&nbsp;</label></td>
								<td><div id="cust-ph-1"><?php echo $_SESSION["customer-ph-1"];?></div></td>
							</tr>
							<tr>
								<td><label for="customer-ph-2">Mobile Number 2:&nbsp;</label></td>
								<td><div id="cust-ph-2"><?php echo $_SESSION["customer-ph-2"];?></div></td>
							</tr>
							<tr>
								<td><label for="customer-email">Email Address:&nbsp;</label></td>
								<td><div id="cust-email"><?php echo $_SESSION["customer-email"];?></div></td>
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
									<td><div id="reg-no"><?php echo $_SESSION["reg-no"];?></div></td>
								</tr>
								<tr>
									<td><label for="chassis-no">Chassis No. :&nbsp;</label></td>
									<td><div id="chassis-no"><?php echo $_SESSION["chassis-no"];?></div></td>
								</tr>
								<tr>
									<td><label for="model-no">Model No. :&nbsp;</label></td>
									<td><div id="model-no"><?php echo $_SESSION["model-no"];?></div></td>
								</tr>
								<tr>
									<td><label for="vehicle">Vehicle Type:&nbsp;</label></td>
									<td><div id="vehicle"><?php echo $_SESSION["vehicle"];?></div></td>
								</tr>
									
							</table>
					</center>
				</p>
			</div>
		</div>

		<br><hr><br>

		<!-- End Vehicle Details -->
			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="ep" class="btn btn-lg btn-dark tdow-buttons">
						  Exterior Polishing
						</button>
						<br>
						<button type="button" id="ep-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter1ss">
						  Select Services
						</button>

						<button type="button" id="ep-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter1sp">
						  Select Parts
						</button>
					</center>

					<!-- Modal 1-->
					<div class="modal fade" id="exampleModalCenter1ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Exterior Polishing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Exterior Polish
					      	<input type="number" aria-label="Checkbox for following label" name="ep-ExteriorPolish" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Spot Polish
					      	<input type="number" aria-label="Checkbox for following label" name="ep-SpotPolish" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="ep-Customize" value="0">
					    	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter1sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Exterior Polishing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="ep-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="ep-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="ep-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="ep-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="ep-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="ep-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="ep-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="ep-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="ep-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="ep-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="ep-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="ep-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="fd" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter2">
						  Full Detailing
						</button>

						<button type="button" id="fd-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter2ss">
						  Select Services
						</button>

						<button type="button" id="fd-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter2sp">
						  Select Parts
						</button>

					</center>

					<!-- Modal 2-->
					<div class="modal fade" id="exampleModalCenter2ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Full Detailing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Full Exterior Polish
					      	<input type="number" aria-label="Checkbox for following label" name="fd-FullExteriorPolish" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Full Interior Cleaning
					      	<input type="number" aria-label="Checkbox for following label" name="fd-FullInteriorCleaning" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Engine Bay Cleaning
					      	<input type="number" aria-label="Checkbox for following label" name="fd-EngineBayCleaning" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Wheel Rim Cleaning
					      	<input type="number" aria-label="Checkbox for following label" name="fd-WheelRimCleaning" value="0">
					    	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter2sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Full Detailing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="fd-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="fd-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="fd-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="fd-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="fd-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="fd-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="fd-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="fd-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="fd-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="fd-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="fd-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="fd-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="cc" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter3">
						  Ceramic Coating
						</button>

						<button type="button" id="cc-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter3ss">
						  Select Services
						</button>

						<button type="button" id="cc-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter3sp">
						  Select Parts
						</button>

					</center>

					<!-- Modal 3-->
					<div class="modal fade" id="exampleModalCenter3ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Ceramic Coating</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Ceramic Coating on Car
					      	<input type="number" aria-label="Checkbox for following label" name="cc-CeramicCoatingOnCar" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Ceramic Coating on Motorbike
					      	<input type="number" aria-label="Checkbox for following label" name="cc-CeramicCoatingOnMotorbike" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="cc-Customize" value="0">
					      	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter3sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Ceramic Coating</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="cc-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="cc-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="cc-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="cc-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="cc-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="cc-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="cc-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="cc-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="cc-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="cc-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="cc-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="cc-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="hp" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter4">
						  Hydrographic Printing
						</button>

						<button type="button" id="hp-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter4ss">
						  Select Services
						</button>

						<button type="button" id="hp-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter4sp">
						  Select Parts
						</button>

					</center>

					<!-- Modal 4-->
					<div class="modal fade" id="exampleModalCenter4ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Hydrographic Printing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Hydrographic Printing
					      	<input type="number" aria-label="Checkbox for following label" name="hp-HydrographicPrinting" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="hp-Customize" value="0">
					      	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter4sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Hydrographic Printing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="hp-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="hp-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="hp-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="hp-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="hp-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="hp-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="hp-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="hp-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="hp-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="hp-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="hp-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="hp-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
			</div>
			
			<!-- End of Row 1 -->

			<!-- Row 2 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="wrp" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter5">
						  Wheel Rim Painting
						</button>

						<button type="button" id="wrp-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter5ss">
						  Select Services
						</button>

						<button type="button" id="wrp-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter5sp">
						  Select Parts
						</button>

					</center>

					<!-- Modal 5-->
					<div class="modal fade" id="exampleModalCenter5ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Wheel Rim Painting</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Painting of Wheel
					      	<input type="number" aria-label="Checkbox for following label" name="wrp-PaintingOfWheel" value="0">
					       	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Colour Name
					      	<input type="number" aria-label="Checkbox for following label" name="wrp-ColourName" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="wrp-Customize" value="0">
					      	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter5sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Wheel Rim Painting</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="wrp-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="wrp-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="wrp-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="wrp-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="wrp-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="wrp-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="wrp-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="wrp-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="wrp-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="wrp-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wrp-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="wrp-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="wrp-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
 				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" id="pj" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter7">
						  Painting Jobs
						</button>

						<button type="button" id="pj-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter6ss">
						  Select Services
						</button>

						<button type="button" id="pj-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter6sp">
						  Select Parts
						</button>

					</center>

					<!-- Modal 7-->
					<div class="modal fade" id="exampleModalCenter6ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Painting Jobs</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Painting Job 1
					      	<input type="number" aria-label="Checkbox for following label" name="pj-1" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Painting Job 2
					      	<input type="number" aria-label="Checkbox for following label" name="pj-2" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Painting Job 3
					      	<input type="number" aria-label="Checkbox for following label" name="pj-3" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="pj-4" value="0">
					    	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="exampleModalCenter6sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Painting Job</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="pj-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="pj-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="pj-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="pj-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="pj-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="pj-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="pj-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="pj-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="pj-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="pj-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="pj-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="pj-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
			<!-- Button trigger modal -->
					<div class="col-md-3 col-sm-4 tdow-modals">
						<center>
							<button type="button" id="mr" class="btn btn-lg btn-dark tdow-buttons">
							  Mechanical Repairs
							</button>

							<button type="button" id="mr-ss" class="btn btn-lg btn-primary tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter7ss">
							  Select Services
							</button>

							<button type="button" id="mr-sp" class="btn btn-lg btn-success tdow-buttons hidden" data-toggle="modal" data-target="#exampleModalCenter7sp">
							  Select Parts
							</button>

						</center>

						<!-- Modal 9-->
						<div class="modal fade" id="exampleModalCenter7ss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Mechanical Repairs</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<div class="tdow-check">
						      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
						      	<input type="number" aria-label="Checkbox for following label" name="mr-Customize" value="0">
						    	</div><br>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
	
					<div class="modal fade" id="exampleModalCenter7sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Mechanical Repairs</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<center><img src="../assets/images/car_photo.jpg" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="mr-Door-Frame">&nbsp;Door Frame</td>
						      	<td><input type="checkbox" name="mr-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Front-Bumper">&nbsp;Front Bumper</td>
						      	<td><input type="checkbox" name="mr-Back-Bumper">&nbsp;Back Bumper</td>
						      	<td><input type="checkbox" name="mr-Radiator-Grill">&nbsp;Radiator Grill</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Frt-Lt-Fender">&nbsp;Frt Lt. Fender</td>
						      	<td><input type="checkbox" name="mr-Back-Lt-Fender">&nbsp;Back Lt. Fender</td>
						      	<td><input type="checkbox" name="mr-Frt-Rt-Fender">&nbsp;Frt Rt. Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Back-Rt-Fender">&nbsp;Back Rt. Fender</td>
						      	<td><input type="checkbox" name="mr-Frt-Lt-Door">&nbsp;Frt Lt. Door</td>
						      	<td><input type="checkbox" name="mr-Frt-Rt-Door">&nbsp;Frt Rt. Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Back-Lt-Door">&nbsp;Back Lt. Door</td>
						      	<td><input type="checkbox" name="mr-Back-Rt-Door">&nbsp;Back Rt. Door</td>
						      	<td><input type="checkbox" name="mr-Luggage-Door">&nbsp;Luggage Door</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Quarter-Panel">&nbsp;Quarter Panel</td>
						      	<td><input type="checkbox" name="mr-Bonet">&nbsp;Bonet</td>
						      	<td><input type="checkbox" name="mr-Roof">&nbsp;Roof</td>
						      	</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

			<!-- End of Row 2 -->
			

		</div>

		<br><hr><br>

		<center>
			<input type="submit" class="btn btn-primary" value="View Invoice" style="width:250px;padding:10px;font-size:125%;" formaction="../Invoice/">
		</center>
		<br><br>

		</form>
	<!-- Form End -->

			</div>
		</div>


<!-- End Main -->


<!-- Javascript -->
		<!-- CDNs -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!-- End CDNs -->

		<!-- Internal Javascript -->

		<script type="text/javascript">
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
		<script type="text/javascript">

			$("#printToAdmin").click(function(event){

				$.post("../PHP-APIS/save.php",{
					dt: $("#date center").html(),
					bc: $("#branch").val(),
					jc: $("#jc-no center span").html(),
					cn: $("#cust-name").html(),
					ca: $("#cust-addr").html(),
					cp1: $("#cust-ph-1").html(),
					cp2: $("#cust-ph-2").html(),
					ce: $("#cust-email").html(),
					rno: $("#reg-no").html(),
					cno: $("#chassis-no").html(),
					mno: $("#model-no").html(),
					v: $("#cust-addr").html(),
					ep: <?php echo "".$ep; ?>,
					fd: <?php echo "".$fd; ?>,
					cc: <?php echo "".$cc; ?>,
					h: <?php echo "".$hp; ?>,
					wrp: <?php echo "".$wrp; ?>,
					mr: <?php echo "".$mr; ?>,
					pj: <?php echo "".$pj; ?>,
					ta: <?php echo "".$tot_amt; ?>
				},function(data, status){
					if (data == "Success") {
						window.location.href = "../Invoice/"
					}
				});
			})

		</script>

		<script type="text/javascript">

			$(".branch-code").click(function(event){

				$.post("../PHP-APIS/getJCNumber.php",{
					bc: $("#branch").val()
				},function(data, status){
					$("#jc-no center span").html(data);
				});
			})

		</script>
		<script type="text/javascript">

			$("#ep").click(function(event){
				$("#ep-ss").toggleClass("hidden");
				$("#ep-sp").toggleClass("hidden");
			});
			$("#fd").click(function(event){
				$("#fd-ss").toggleClass("hidden");
				$("#fd-sp").toggleClass("hidden");
			});
			$("#cc").click(function(event){
				$("#cc-ss").toggleClass("hidden");
				$("#cc-sp").toggleClass("hidden");
			});
			$("#hp").click(function(event){
				$("#hp-ss").toggleClass("hidden");
				$("#hp-sp").toggleClass("hidden");
			});
			$("#wrp").click(function(event){
				$("#wrp-ss").toggleClass("hidden");
				$("#wrp-sp").toggleClass("hidden");
			});
			$("#pj").click(function(event){
				$("#pj-ss").toggleClass("hidden");
				$("#pj-sp").toggleClass("hidden");
			});
			$("#mr").click(function(event){
				$("#mr-ss").toggleClass("hidden");
				$("#mr-sp").toggleClass("hidden");
			});

		</script>

		<!-- End Internal Javascript -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>
		<script src="../assets/js/tdow-commons.js"></script>

		<!-- End Extrenal Javascript -->


<!-- End Javascript -->

	</body>
</html>