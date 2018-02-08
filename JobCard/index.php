<?php
 session_start(); 
 if (!isset($_SESSION['customer-name'])) {
 	# code...
 	$_SESSION['customer-name'] = "";
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
	$keys = array_keys($_POST);
	$ep = 0;
	$fd = 0;
	$cc = 0;
	$hp = 0;
	$wrp = 0;
	$pj = 0;
	$mr = 0;
	if (isset($keys)) {
		# code...
		foreach ($keys as $k) {
			# code...
			$bc = explode("-", $k);
			if ($bc[0] == "ep") {
				# code...
				$ep += $_POST[$k];
			}
			elseif ($bc[0] == "fd") {
				# code...
				$fd += $_POST[$k];
			}
			elseif ($bc[0] == "cc") {
				# code...
				$cc += $_POST[$k];
			}
			elseif ($bc[0] == "hp") {
				# code...
				$hp += $_POST[$k];
			}
			elseif ($bc[0] == "wrp") {
				# code...
				$wrp += $_POST[$k];
			}
			elseif ($bc[0] == "pj") {
				# code...
				$pj += $_POST[$k];
			}
			elseif ($bc[0] == "mr") {
				# code...
				$mr += $_POST[$k];
			}
		}
	}
	$services = array('Exterior Polishing' => $ep, 'Full Detailing' => $fd, 'Ceramic Coating' => $cc, 'Hydrographic Printing' => $hp, 'Wheel Rim Painting' => $wrp, 'Painting Jobs' => $pj, 'Mechanic Repairs' => $mr);

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
					<span>Job Card</span>
				</div>
			</center>
		</div>
	<!-- End Navbar -->


	<!-- Start Form -->
		<form action="" method="post">
	
	<!-- Subnav -->
		<div id="tdow-subnav" class="row" style="margin-right:0px;">
			<div id="date" class="col-md-4 col-sm-6"></div>
				<div id="location" class="col-md-4 col-sm-6">
				<center>
					<select id="branch" name="branch">
						<option>Select Location</option>
						<option>A</option>
						<option>B</option>
						<option>C</option>
					</select>
				</center>
				</div>
			<div id="jc-no" class="col-md-4 col-sm-12"><center>Job Card No. B123546</center></div>
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
								<td><div id="cust-name"><?php echo $_SESSION["customer-name"];?></div></td>
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

		<!-- Customer Services -->

		<div class="row" style="margin-right:0;">
			<div class="col-md-12 col-sm-12">
				<center>
					<input id="services" type="button" class="btn-dark" value="Go to Services" style="width:200px;font-weight:bold;cursor:pointer;" onclick="openInNewTab('../Services/')">
				</center>
			</div>
		</div>
		
		<!-- End Customer Services -->

		<br><hr><br>

		<!-- Billing -->

		<div class="row billing" style="margin-right:0;">
			<div class="col-md-12">
			<center>
				<table>
					<tr>
						<th>Sr No.</th>
						<th>Customer Requirements</th>
						<th>Amount</th>
					</tr>
					<?php 
						$i = 1;
						$tot_amt = 0;
						foreach ($services as $s => $value) {
							# code...
							if ($value != 0) {
								# code...
								echo "<tr>
									<td>".$i."</td>
									<td>".$s."</td>
									<td class='val'>".$value."</td>
								</tr>";
								$tot_amt += $value;
								$i++;
							}
						}
						echo "<tr>
							<td></td>
							<td><strong>Total Amount</strong></td>
							<td class='val' id='tot_amt'><strong>".$tot_amt."</strong></td>
						</tr>";
					?>
				</table>
					
			</center>
			</div>
		</div>

		<!-- End Billing -->

		<br><br>

		<center>
			<input type="button" class="btn-dark" id="printToAccounts" value="Print to Accounts" style="width:200px;font-weight:bold;cursor:pointer;">
			<input type="button" class="btn-dark" id="printToWorkshop" value="Print to Workshop" style="width:200px;font-weight:bold;cursor:pointer;">
			<input type="button" class="btn-dark" id="printToAdmin" value="Save" style="width:200px;font-weight:bold;cursor:pointer;">
		</center>
		
		</form>
	<!-- Form End -->

<!-- End Main -->

		<br><hr><br>

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

			$("#printToAccounts").click(function(event){

				$("#services").hide();
				$("#printToAccounts").hide();
				$("#printToWorkshop").hide();
				$("#printToAdmin").hide();
				window.print();
				$("#services").show();
				$("#printToAccounts").show();
				$("#printToWorkshop").show();
				$("#printToAdmin").show();
			});

		</script>
		<script type="text/javascript">

			$("#printToWorkshop").click(function(event){

				$("#services").hide();
				$("#printToAccounts").hide();
				$("#printToWorkshop").hide();
				$("#printToAdmin").hide();
				$(".val").hide();
				window.print();
				$("#services").show();
				$("#printToAccounts").show();
				$("#printToWorkshop").show();
				$("#printToAdmin").show();
			});

		</script>
		<script type="text/javascript">

			$("#printToAdmin").click(function(event){

				$.post("../PHP-APIS/save.php",{
					dt: $("#date center").html(),
					bc: $("#branch").val(),
					jc: $("#jc-no center").html(),
					cn: $("#cust-name").html(),
					ca: $("#cust-addr").html(),
					cp1: $("#cust-ph-1").html(),
					cp2: $("#cust-ph-2").html(),
					ce: $("#cust-email").html(),
					rno: $("#reg-no").html(),
					cno: $("#chassis-no").html(),
					mno: $("#model-no").html(),
					v: $("#cust-addr").html(),
					ta: <?php echo "".$tot_amt; ?>
				},function(data, status){
					alert(data);
				});
			})

		</script>

		<!-- End Internal Javascript -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>
		<script src="../assets/js/tdow-commons.js"></script>

		<!-- End Extrenal Javascript -->


<!-- End Javascript -->

	</body>
</html>