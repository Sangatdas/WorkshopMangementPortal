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
 if (!isset($_SESSION['ep'])) {
 	# code...
 	$_SESSION['ep'] = 0;
 }
 if (!isset($_SESSION['fd'])) {
 	# code...
 	$_SESSION['fd'] = 0;
 }
 if (!isset($_SESSION['cc'])) {
 	# code...
 	$_SESSION['cc'] = 0;
 }
 if (!isset($_SESSION['hp'])) {
 	# code...
 	$_SESSION['hp'] = 0;
 }
 if (!isset($_SESSION['wrp'])) {
 	# code...
 	$_SESSION['wrp'] = 0;
 }
 if (!isset($_SESSION['pj'])) {
 	# code...
 	$_SESSION['pj'] = 0;
 }
 if (!isset($_SESSION['mr'])) {
 	# code...
 	$_SESSION['mr'] = 0;
 }
	$keys = array_keys($_POST);
	$ep = 0;
	$fd = 0;
	$cc = 0;
	$hp = 0;
	$wrp = 0;
	$pj = 0;
	$mr = 0;
	$ep_msg = "";
	$fd_msg = "";
	$cc_msg = "";
	$hp_msg = "";
	$wrp_msg = "";
	$pj_msg ="";
	$mr_msg = "";
	if (isset($keys)) {
		# code...
		foreach ($keys as $k) {
			# code...
			$bc = explode("-", $k);
			if ($bc[0] == "ep" && $_POST[$k] != 0) {
				# code...
				$ep += $_POST[$k];
				$ep_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "fd" && $_POST[$k] != 0) {
				# code...
				$fd += $_POST[$k];
				$fd_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "cc" && $_POST[$k] != 0) {
				# code...
				$cc += $_POST[$k];
				$cc_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "hp" && $_POST[$k] != 0) {
				# code...
				$hp += $_POST[$k];
				$hp_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "wrp" && $_POST[$k] != 0) {
				# code...
				$wrp += $_POST[$k];
				$wrp_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "pj" && $_POST[$k] != 0) {
				# code...
				$pj += $_POST[$k];
				$pj_msg .="<b>".substr($k, 3)."</b><br>";
			}
			elseif ($bc[0] == "mr" && $_POST[$k] != 0) {
				# code...
				$mr += $_POST[$k];
				$mr_msg .="<b>".substr($k, 3)."</b><br>";
			}



			if ($bc[0] == "ep" && $_POST[$k] == 'on') {
				# code...
				$ep_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "fd" && $_POST[$k] == 'on') {
				# code...
				$fd_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "cc" && $_POST[$k] == 'on') {
				# code...
				$cc_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "hp" && $_POST[$k] == 'on') {
				# code...
				$hp_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "wrp" && $_POST[$k] == 'on') {
				# code...
				$wrp_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "pj" && $_POST[$k] == 'on') {
				# code...
				$pj_msg .= substr($k, 3)."<br>";
			}
			elseif ($bc[0] == "mr" && $_POST[$k] == 'on') {
				# code...
				$mr_msg .= substr($k, 3)."<br>";
			}

		}

	}
	if ($_SESSION["vehicle"] == "Car") {
		# code...
		$imgsrc = "../assets/images/car_photo.jpg";
	}
	elseif ($_SESSION["vehicle"] == "Bike") {
		# code...
		$imgsrc = "../assets/images/bike_photo.jpg";
	}
	$services = array('Exterior Polishing<br>'.$ep_msg => $ep, 'Full Detailing<br>'.$fd_msg => $fd, 'Ceramic Coating<br>'.$cc_msg => $cc, 'Wheel Rim Painting<br>'.$wrp_msg => $wrp, 'Painting Jobs<br>'.$pj_msg => $pj, 'Mechanic Repairs<br>'.$mr_msg => $mr, 'Hydrographic Printing' => $hp);
	
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
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<!-- End CDNs -->

		<!-- Internal Stylesheets -->
		<style type="text/css">
			.main{
				padding: 50px;
			}
			.left-section{

			}
			.mid-section .title{
				font-size: 125%;
			}
			th{
				border: solid 1px black;
			}
			td{
				border: solid 1px black;
			}
		</style>
		<!-- End Internal Stylesheets -->

	<!-- end css -->
	</head>
	<body>
<!-- Main -->
	
	<div class="row main" style="margin-right:0;">
		<div class="col-md-4 left-section">
			<center>
				Invoice No.<br><br>
				<img src="../assets/images/logo.jpg" width="100" height="100"><br>
			</center>
		</div>
		<div class="col-md-4 mid-section">
			<center>
				<strong><span class="title">The Deals on Wheels</span></strong><br>
				<strong><span class="title">Tax Invoice</span></strong><br>
				<address>
					Sr No. 20, Patil Nagar, Near Suryadatta<br>
					College, Bavdhan, Pune<br>
					GSTIN/UIN: 27EWEPK7628l1ZX<br>
					Contact: 7447436660<br>
					E-Mail: info@thedealsonwheels.com<br>
					Website: wwww.thedealsonwheels.com<br>
				</address>
			</center>
		</div>
		<div class="col-md-4 right-section">
			<center>
				<span id="date"></span>
				<span>Invoice No. :</span><br>
				<span>Job Card No. :<?php echo $_SESSION["jc-no"]; ?></span><br>
			</center>
		</div>
	</div>
	<div class="row" style="margin-right:0;">
		<div class="col-md-6">
			<center>
				<strong>Customer Details</strong><br>
				Name: <?php echo $_SESSION["designation"]." ".$_SESSION["customer-fname"]." ".$_SESSION["customer-mname"]." ".$_SESSION["customer-lname"];?><br>
				Address: <?php echo $_SESSION["customer-address"];?><br>
				Mob: <?php echo $_SESSION["customer-ph-1"].", ".$_SESSION["customer-ph-2"];?><br>
				Email: <?php echo $_SESSION["customer-email"]; ?><br>
				State: Maharashtra, Code: 27
			</center>
		</div>
		<div class="col-md-6">
			<center>
				<strong>Vehicle Details</strong><br>
				Registration No: <?php echo $_SESSION["reg-no"]; ?><br>
				Chassis No: <?php echo $_SESSION["chassis-no"]; ?><br>
				Model No: <?php echo $_SESSION["model-no"];?><br>
				Type: <?php echo $_SESSION["vehicle"]; ?><br>
			</center>
		</div>
	</div>
	<div class="row" style="margin-right:0;">
		<div class="col-md-6 col-sm-6">
		<center>
			<table>
				<tr>
					<th>Sr. No.</th>
					<th>Particulars</th>
					<th>HSN/SAC</th>
					<th>Quantity</th>
					<th>Rate</th>
					<th>Amount</th>
				</tr>
				<tr>
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
									<td>998729</td>
									<td></td>
									<td></td>
									<td class='val'>".$value."</td>
								</tr>";
								$tot_amt += $value;
								$i++;
							}
						}
						echo "<tr>
							<td>".($i+1)."</td>
							<td><strong>CGST</strong></td>
							<td></td>
							<td></td>
							<td>9%</td>
							<td class='val' id='cgst_amt'><strong>".($tot_amt*0.09)."</strong></td>
						</tr>";
						echo "<tr>
							<td>".($i+2)."</td>
							<td><strong>SGST</strong></td>
							<td></td>
							<td></td>
							<td>9%</td>
							<td class='val' id='sgst_amt'><strong>".($tot_amt*0.09)."</strong></td>
						</tr>";

						echo "<tr>
							<td></td>
							<td><strong>Total Amount</strong></td>
							<td></td>
							<td></td>
							<td></td>
							<td class='val' id='tot_amt'><strong>".($tot_amt*1.18)."</strong></td>
						</tr>";
						//echo "".$ep."".$fd."".$cc."".$hp."".$."".$ep."".$ep;
					?>
				</tr>
			</table>
		</center>
		</div>
		<div class="col-md-6 col-sm-6">
			<img src= <?php echo "".$imgsrc; ?> width="500" height="350">
		</div>
	</div><br>
	<div class="row" style="margin-right:0;">
		<div class="col-md-6 col-sm-6">
			<center>
				<small>Amount Chargeable (in words)</small><br>
				<strong>INR <span id="amt"></span></strong>
			</center>
		</div>
	</div>
	<div class="row" style="margin-right:0;">
		<div class="col-md-12 col-sm-12">
			<center>
				<table>
					<tr>
						<th rowspan="2">HSN/SAC</th>
						<th rowspan="2">Taxable Value</th>
						<th colspan="2">Central Tax</th>
						<th colspan="2">State Tax</th>
						<th rowspan="2">Total Tax Amount</th>
					</tr>
					<tr>
						<td>Rate</td>
						<td>Amount</td>
						<td>Rate</td>
						<td>Amount</td>
					</tr>
					<tr>
						<?php 
							$i = 1;
							$tot_amt = 0;
							foreach ($services as $s => $value) {
								# code...
								if ($value != 0) {
									# code...
									echo "<tr>
										<td>998729</td>
										<td class='val'>".$value."</td>
										<td>9%</td>
										<td class='val'>".($value*0.09)."</td>
										<td>9%</td>
										<td class='val'>".($value*0.09)."</td>
										<td class='val'>".($value*0.18)."</td>
									</tr>";
									$tot_amt += $value;
									$i++;
								}
							}
							echo "<tr>
								<th><strong>Total</strong></th>
								<th class='val'>".$tot_amt."</th>
								<th></th>
								<th class='val'>".($tot_amt*0.09)."</th>
								<th></th>
								<th class='val'>".($tot_amt*0.09)."</th>
								<th class='val' id='tax_amt'>".($tot_amt*0.18)."</th>
							</tr>";
						?>	
					</tr>
				</table>
			</center>
		</div>
	</div>
	<div class="row" style="margin-right:0;">
		<div class="col-md-12 col-sm-12">
			<center>
			<small>Tax Amount(in words):</small><strong><span id="tax"></span></strong><br>
			</center>
		</div>
		<div class="col-md-6 col-sm-6">
			<center>
				Remarks:<br>
			</center>
		</div>
		<div class="col-md-6 col-sm-6">
			<center>
				<div style="width:450px;text-align:left;">
						Company's Bank Details<br>
						Bank Name: <strong>BANK OF MAHARASHTRA CC A/C</strong><br>
						A/c No. : <strong>60023806370</strong><br>
						Branch &amp; IFS Code: <strong>GANESH NAGAR &amp; MAHB0000756</strong><br>
				</div>
			</center>
		</div><br><br>

	</div><br><br><br><br>
	<div class="row" style="margin-right:0">
		<div class="col-md-6 col-sm-6"><center>Customer's Seal and Signature</center></div>
		<div class="col-md-6 col-sm-6"><center><strong>For The Deals On Wheels</strong><br><small>Authorised Signatory</small></center></div>
	</div><br><br><br>	
	<center>
		<input id="printToAccounts" type="button" class="btn-dark" value="Print For Accounts" style="width:200px;font-weight:bold;cursor:pointer;">
		<input id="printToWorkshop" type="button" class="btn-dark" value="Print For Workshop" style="width:200px;font-weight:bold;cursor:pointer;">
		<input id="printToAdmin" type="button" class="btn-dark" value="Finish" style="width:200px;font-weight:bold;cursor:pointer;">
	</center>
	<br><br><br>
	<!-- Start Form -->

<!-- End Main -->


<!-- Javascript -->
		<!-- CDNs -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!-- End CDNs -->

		<!-- External Javascript -->

		<script src="js/index.js"></script>
		<script src="../assets/js/amountInWords.js"></script>
		<!-- End Extrenal Javascript -->

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
			var d = yyyy + '-' + mm + '-' + dd; 
			document.getElementById("date").innerHTML = "<center>Date: "+today+"</center>";

			document.getElementById("amt").innerHTML = " " + convertNumberToWords(<?php echo ($tot_amt*1.18);?>) + " Only";

			document.getElementById("tax").innerHTML = " " + convertNumberToWords(<?php echo ($tot_amt*0.18);?>) + " Only";

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
				$(".val").show();
				$("#services").show();
				$("#printToAccounts").show();
				$("#printToWorkshop").show();
				$("#printToAdmin").show();
			});

		</script>
		<script type="text/javascript">
			$("#printToAdmin").click(function(event){

				$.post("../PHP-APIS/save.php",{
					dt: d,
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
						window.location.href = "../Home/";
						//alert(data);
					}
					else{
						alert("Some problem has occured..Try again later.");
					}
				});
			})

		</script>


		<!-- End Internal Javascript -->



<!-- End Javascript -->

	</body>
</html>