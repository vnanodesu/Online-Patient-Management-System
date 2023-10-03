<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['name']=$name;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


}

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Solis Khoo Bahay Paanakan</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login" style="background: #e9ecef;">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.php"><h2 style="color: #44444;"> SKBP | Password Recovery</h2></a>
				</div>

				<div class="box-login"style="    background: white;
    border-bottom: groove;
    border-block-color: inherit;" >
					<form class="form-login" method="post">
						<fieldset style=" background: white;">
							<legend style=" background: white; color:#444444;">
								Patient Password Recovery
							</legend >
							<p style=" color:#2e2c2c">
								Please enter your Email and password to recover your password.<br />
					
							</p>

							<div class="form-group form-actions">
								<span   style="color: #2e2c2c;" class="input-icon">
									<input type="text" class="form-control" name="fullname" placeholder="Registered Full Name">
									<i class="fa fa-lock" style="color: #319997;"></i>
									 </span>
							</div>

							<div class="form-group">
								<span  style="color: #2e2c2c;" class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Registered Email">
									<i class="fa fa-user" style="color: #319997;"></i> </span>
							</div>

							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit" style="background-color: #319997;
                                                   border-color: #acbfbd;">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account" style="color:#58585a;">
								Already have an account? 
								<a href="user-login.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year" style="color:#58585a;" ></span><span class="text-bold text-uppercase"> SKBP</span>. <span>All rights reserved</span>
					</div>
			
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>