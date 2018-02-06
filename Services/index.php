<!DOCTYPE Html>
<html>
	<head>

		<title></title>
	<!-- css -->

		<!-- External Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/inputs.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- End External Stylesheets -->

		<!-- CDNs -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
					<span>Services</span>
				</div>
			</center>
		</div>
	<!-- End Navbar -->


	<!-- Start Form -->
		<form method="post">
		<!-- Row 1 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter1">
						  Polishing
						</button>
					</center>

					<!-- Modal 1-->
					<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Polishing</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Exterior Polish" value="1200">&nbsp;&nbsp;Exterior Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Headlight Polish" value="2500">&nbsp;&nbsp;Headlight Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Spot Polish" value="1000">&nbsp;&nbsp;Spot Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="300">&nbsp;&nbsp;Customize
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter2">
						  Full Detailing
						</button>
					</center>

					<!-- Modal 2-->
					<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Full Exterior Polish" value="4000">&nbsp;&nbsp;Full Exterior Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Full Interior Cleaning" value="3100">&nbsp;&nbsp;Full Interior Cleaning
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Engine Bay Cleaning" value="1200">&nbsp;&nbsp;Engine Bay Cleaning
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Wheel Rim Cleaning" value="1000">&nbsp;&nbsp;Wheel Rim Cleaning
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter3">
						  Ceramic Coating
						</button>
					</center>

					<!-- Modal 3-->
					<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Ceramic Coating on Car" value="3200">&nbsp;&nbsp;Ceramic Coating on Car
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Ceramic Coating on Motorbike" value="1250">&nbsp;&nbsp;Ceramic Coating on Motorbike
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="2000">&nbsp;&nbsp;Customize
					      	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter4">
						  Hydrographic Printing
						</button>
					</center>

					<!-- Modal 4-->
					<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Hydrographic Printing" value="3000">&nbsp;&nbsp;Hydrographic Printing
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="1200">&nbsp;&nbsp;Customize
					      	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter5">
						  Wheel Rim Painting
						</button>
					</center>

					<!-- Modal 5-->
					<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Painting of Wheel" value="1500">&nbsp;&nbsp;Painting of Wheel
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Colour Name" value="1700">&nbsp;&nbsp;Colour Name
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="2000">&nbsp;&nbsp;Customize
					      	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter6">
						  Chrome Painting
						</button>
					</center>

					<!-- Modal 6-->
					<div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Chrome Painting</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Chrome Painting" value="1300">&nbsp;&nbsp;Chrome Painting
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Colour Name" value="1400">&nbsp;&nbsp;Colour Name
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="1100">&nbsp;&nbsp;Customize
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter7">
						  Painting Jobs
						</button>
					</center>

					<!-- Modal 7-->
					<div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Exterior Polish" value="1200">&nbsp;&nbsp;Exterior Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Headlight Polish" value="1200">&nbsp;&nbsp;Headlight Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Spot Polish" value="1400">&nbsp;&nbsp;Spot Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="3000">&nbsp;&nbsp;Customize
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter8">
						  Insurance Jobs
						</button>
					</center>

					<!-- Modal 8-->
					<div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Insurance Jobs</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Exterior Polish" value="2000">&nbsp;&nbsp;Exterior Polish
					      	</div><br>
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="4500">&nbsp;&nbsp;Customize
					    	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>

			<!-- End of Row 2 -->
			
			<!-- Row 3 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter9">
						  Mechanical Repairs
						</button>
					</center>

					<!-- Modal 9-->
					<div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="1200">&nbsp;&nbsp;Customize
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter10">
						  Offers
						</button>
					</center>

					<!-- Modal 10-->
					<div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Offers</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="2300">&nbsp;&nbsp;Customize
					    	</div><br>
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
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" data-toggle="modal" data-target="#exampleModalCenter11">
						  Others
						</button>
					</center>

					<!-- Modal 11-->
					<div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Others</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="tdow-check">
					      	<input type="checkbox" aria-label="Checkbox for following label" name="Customize" value="1200">&nbsp;&nbsp;Customize
					    	</div><br>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		<!-- End of Row 3 -->
		<br><hr><br>
		<center>
			<input type="submit" class=" btn btn-secondary" value="Finish" style="width:200px;font-weight:bold;" formaction="../JobCard/">
		</center>

		</form>
	<!-- Form End -->

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