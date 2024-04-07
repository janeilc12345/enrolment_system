<?php
session_start();
if(isset($_SESSION['email'])){
	if($_SESSION['role'] == 1){
	header("Location: admin/index.php");
	}else{
		header("Location: admin/courses.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<!-- FAVICONS ICON ============================================= -->
		<link rel="icon" href="../assets/images/je.png" />

<!-- PAGE TITLE HERE ============================================= -->
<title>Enrollment System</title>

	

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/background2.png);">
			<a href="index.html"><img src="assets/images/background2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="register.php">Create one here</a></p>
				</div>	
				<form class="contact-bx" method="post" action="backend/login.php">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Email address</label>
									<input name="email" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember">
									<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
								</div>
								<a href="forget-password.html" class="ml-auto">Forgot Password?</a>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
						</div>
						<span id="loginAttemptMessage"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
function displayLoginAttemptMessage() {
    // Get the URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    // Get the value of the "attempt" parameter
    const attemptValue = urlParams.get('attempts');

    if (attemptValue && attemptValue.toLowerCase() === 'max') {
        // If the "attempt" parameter is "max", user exceeds the maximum login attempts
        const message = 'You have exceeded the maximum login attempts.';
        // Get the span element to display the message
        const messageSpan = document.getElementById('loginAttemptMessage');
        // Replace the content of the span element with the message
		messageSpan.style.color = "red";
        messageSpan.innerText = message;
    }
}

// Call the function when the page loads
window.onload = displayLoginAttemptMessage;
</script>

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
</body>

</html>
