<!DOCTYPE Html>
<html>
	<head>

		<title></title>
	<!-- css -->

		<!-- External Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
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
		<form id="login-form" method="post">
	
		<br><br>
	
		<div class="row" style="margin-right:0px;">

	<!-- Login Details	 -->
	
			<div class="col-md-12 col-sm-12 division" style="text-align:center;">
				<div class="division-title">
					<h1><u>LOGIN </u></h1>
				</div>
				<p>
					<center>
						<table>
                            <tr>
                                <td colspan = "2">
                                <center>
                                        <input type="radio" name="loginAt" value="Admin" required>
                                        <label for = "admin"><b>Admin </b></label>
                                        <input type= "radio" name="loginAt" value="Manager" required>
                                        <label for = "manager"> <b>Manager</b></label>
                                        <input type="radio" name="loginAt" value="Accounts" required>
                                        <label for = "accounts"><b> Accounts</b></label>
                                </center>
                                    
                                </td>
                                
                                
                            </tr> 
                            
                            <tr>
                                <td>
                                    <label for = "username">Username:&nbsp;</label>
                                </td>
                                <td>
                                    <input id="username" type = "text" name="username" required>
                                </td>
                            </tr>
                        
							<tr>
								<td><label for="password">Password:&nbsp;</label></td>
								<td> 
                                    <input id="password" type = "password" name="password" required>
                                </td>
							</tr>
                            
                            
						
						</table>
                        <center>
                            <br>
                            <input type="reset" id="reset" class="btn-danger" value="Reset" style="width:100px;font-weight:bold;">&nbsp;
                            <input type="button" id="login" class="btn-dark" value="Login" style="width:100px;font-weight:bold;">
                            <br><br>
                            <a href ="">Forgot Password?</a>
                            
                        </center>

					</center>
				</p>
			</div>
	
	<!-- End Customer Details -->

		
		<br><hr><br>

		<br><br>

    </div>
		
		</form>
	<!-- Form End -->

<!-- End Main -->

		<br><hr><br>

<!-- Javascript -->


		<!-- External Javascript -->

		<script src="js/index.js"></script>

		<!-- End Extrenal Javascript -->

		<!-- CDNs -->

		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!-- End CDNs -->

		<!-- Internal Javascript -->

		<script type="text/javascript">
			function openInNewTab(url) {
			  window.location.href = url;
			}
		</script>

		<!-- jQuery -->

		<script type="text/javascript">

			$("#login").click(function(){
			 	
				var username = $("#username").val();
				var password = $("#password").val();

			    $.post("../PHP-APIS/management-login.php",
			    {
			        uname: username,
			        pswd: password,
			        lat : $("[name='loginAt']:checked").val()
			    },
			    function(data, status){
			        if (data === "Login Success") {
			        	var form = $("#login-form");
			        	form.attr("action","../PHP-APIS/session-start.php");
			        	form.submit();
			        }
			        else {
			        	alert("Invalid Username or Password");
			        }
			    });
			});

		</script>

		<!-- End jQuery -->

		<!-- End Internal Javascript -->

<!-- End Javascript -->

	</body>
</html>