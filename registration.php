<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";

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
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
		

	</head>

	<body class="login" style="background: #e9ecef;">
		
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.php"><h2 style="color: #44444;">SKBP | Patient Registration</h2></a>
				</div>
				
				<div class="box-register" style="    background: white;
    border-bottom: groove;
    border-block-color: inherit;">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset style=" background: white;">
							<legend style=" background: white; color:#444444;">
								Sign Up
							</legend>
							<p style=" color:#2e2c2c">
								Enter your personal details below:
							</p>
							<div  class="form-group" >
								<input   type="text" class="form-control" name="full_name" placeholder="Full Name" required style=" background: white;">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required style=" background: white;">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required style=" background: white;">
							</div>
							<div class="form-group">
								<label class="block" style=" color:#2e2c2c">
									Civil Status
								</label>
								<div class="clip-radio radio-primary" >
									<input type="radio" id="rg-female" name="gender" value="Single" style=" background: white;">
									<label for="rg-female">
										Single
									</label>
									<input type="radio" id="rg-male" name="gender" value="Married" style=" background: white;">
									<label for="rg-male" >
										Married
									</label>
								</div>
							</div>
							<p style=" color:#2e2c2c">
								Enter your account details below:
							</p>
							<div class="form-group" >
								<span  class="input-icon" >
									<input  type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required style=" background: white;">
									<i style="color: #319997;" class="fa fa-envelope" ></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required style=" background: white;">
									<i style="color: #319997;" class="fa fa-lock" ></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required style=" background: white;">
									<i style="color: #319997;" class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary" >
									<input  type="checkbox" id="agree" value="agree" checked="true" readonly=" true" >
									<label   for="agree">
										
												I agree <a href="https://seersco.com/articles/tag/i-accept-the-terms-and-conditions-script/">Terms & Condition </a> and  <a href="https://termify.io/terms-and-conditions-generator?msclkid=6dd7e49413111163c33a80b0272e86e2&utm_source=bing&utm_medium=cpc&utm_campaign=Termify&utm_term=terms%20and%20conditions%20generator&utm_content=Terms%20%26%20Conditions"> Privacy policy <a href="user-login.php">

									</label>
								</div>
							</div>
							<div class="form-actions" style="color:#58585a;">
								<p>
									Already have an account?
									<a href="user-login.php">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit" style="background-color: #319997;
                                                   border-color: #acbfbd;">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
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
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>

</html>