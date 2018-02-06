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
			hr{
				border-color: #444;
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
					<span>System Dashboard</span>
				</div>
			</center>
		</div>
	<!-- End Navbar -->


	<!-- Start Form -->

	<!-- system dashboard -->
		<form action="" method="post">
		<!-- Row 1 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Customer-Data/')">
						  Customer Data
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Accounts/')">
						  Accounts
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../HR/')">
						  HR
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Offer/')">
						  Offer
						</button>
					</center>

				</div>
			</div>
			
			<!-- End of Row 1 -->

			<!-- Row 2 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../JobCard/')">
						  Job Card
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Purchase/')">
						  Purchase
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Forms/')">
						  Forms
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Contact/')">
						  SMS/Email
						</button>
					</center>

				</div>
			</div>

			<!-- End of Row 2 -->
			
			<!-- Row 3 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../WorkFlow/')">
						  Workflow Status
						</button>
					</center>

				</div>
			</div>
		<!-- End of Row 3 -->
		</form>
	<!-- Form End -->

		<br><hr><br>

		<!-- Reports -->

			<center><h3>Reports<h3></center>

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Sales/')">
						  Sales Report
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Purchase/')">
						  Purchase Report
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Payable/')">
						  Payable
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Stock/')">
						  Stock
						</button>
					</center>

				</div>
			</div>
			
			<!-- End of Row 1 -->

			<!-- Row 2 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../Receivable/')">
						  Receivable
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../SalesVsActual/')">
						  Sales Vs Actual
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../WorkshopProductivity/')">
						  Workshop Productivity
						</button>
					</center>

				</div>
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../SalesByCategory/')">
						  Sales By Category
						</button>
					</center>

				</div>
			</div>

			<!-- End of Row 2 -->
			
			<!-- Row 3 -->

			<div class="row" style="margin-top:50px;margin-right:0;">
			<!-- Button trigger modal -->
				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../PurchaseByCategory/')">
						  Purchase By Category
						</button>
					</center>

				</div>

				<div class="col-md-3 col-sm-4 tdow-modals">
					<center>
						<button type="button" class="btn btn-lg btn-dark tdow-buttons" onclick="openInNewTab('../SalesByBranch/')">
						  Sales By Branch
						</button>
					</center>

				</div>
			</div>
		<!-- End of Row 3 -->
		</form>

<!-- End Main -->
		<br><hr><br>

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