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
				<div><a href="../Home/"><i class="fas fa-home"></i> Home</a></div>
				<div><a href="../Customer-Data/"><i class="fa fa-id-card"></i> New JobCard</a></div>
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
					      	<input type="number" aria-label="Checkbox for following label" name="ep-FullExteriorPolish" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Spot Polish
					      	<input type="number" aria-label="Checkbox for following label" name="ep-EngineBayCleaning" value="0">
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label">&nbsp;&nbsp;Customize
					      	<input type="number" aria-label="Checkbox for following label" name="ep-WheelRimCleaning" value="0">
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="ep-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="ep-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="ep-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="ep-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="ep-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="ep-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="ep-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="ep-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="ep-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="ep-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="ep-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="ep-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="ep-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="ep-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="ep-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					      	  	<table>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="fd-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="fd-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="fd-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="fd-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="fd-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="fd-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="fd-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="fd-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="fd-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="fd-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="fd-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="fd-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="fd-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="fd-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="fd-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					      	 	<table>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="cc-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="cc-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="cc-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="cc-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="cc-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="cc-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="cc-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="cc-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="cc-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="cc-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="cc-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="cc-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="cc-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="cc-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="cc-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					      	 	<table>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="hp-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="hp-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="hp-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="hp-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="hp-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="hp-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="hp-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="hp-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="hp-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="hp-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="hp-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="hp-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="hp-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="hp-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="hp-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					 	<table>
						      	<tr>
						      	<td><input type="checkbox" name="wr-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="wr-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="wr-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wr-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="wr-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="wr-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wr-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="wr-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="wr-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="wr-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="wr-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="wr-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="wr-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="wr-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="wr-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="wr-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="wr-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="wr-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					      	<table>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="pj-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="pj-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="pj-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="pj-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="pj-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="pj-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="pj-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="pj-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="pj-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="pj-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="pj-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="pj-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="pj-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="pj-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="pj-Handle">&nbsp;Handle</td>
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
					      	<center><img src="Bikeanatomy.PNG" width="400" height="400"></center><br>
					       	<table>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Full-Body">&nbsp;Full Body</td>
						      	<td><input type="checkbox" name="mr-Fuel-Tank">&nbsp;Fuel Tank</td>
						      	<td><input type="checkbox" name="mr-Engine">&nbsp;Engine</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Mirror">&nbsp;Mirror</td>
						      	<td><input type="checkbox" name="mr-Headlight">&nbsp;Headlight</td>
						      	<td><input type="checkbox" name="mr-Taillight">&nbsp;Taillight</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Wheel-Rim">&nbsp;Wheel Rim</td>
						      	<td><input type="checkbox" name="mr-Front-Fender">&nbsp;Front Fender</td>
						      	<td><input type="checkbox" name="mr-Rare-Fender">&nbsp;Rare Fender</td>
						      	</tr>
						      	<tr>
						      	<td><input type="checkbox" name="mr-Frame">&nbsp;Frame</td>
						      	<td><input type="checkbox" name="mr-Brake Calliper">&nbsp;Brake Calliper</td>
						      	<td><input type="checkbox" name="mr-Shock Absorber">&nbsp;Shock Absorber</td>
						      	</tr>
                                <tr>
						      	<td><input type="checkbox" name="mr-Air-Filter-Box">&nbsp;Air Filter Box</td>
						      	<td><input type="checkbox" name="mr-Tool-Box">&nbsp;Tool Box</td>
						      	<td><input type="checkbox" name="mr-Foot-Peg">&nbsp;Foot Peg</td>
                                </tr>
                                <tr>
						      	<td><input type="checkbox" name="mr-Swing-Arm">&nbsp;Swing Arm </td>
						      	<td><input type="checkbox" name="mr-Speedometer">&nbsp;Speedometer</td>
						      	<td><input type="checkbox" name="mr-Handle">&nbsp;Handle</td>
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