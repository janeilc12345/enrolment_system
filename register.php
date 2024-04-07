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
	<link rel="icon" href="assets/images/je.png" />

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
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>	
				<form class="contact-bx" method="post" action="backend/createUser.php" onsubmit="return validatePassword()">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Email Address</label>
									<input id="email" name="email" type="email" required="" class="form-control">
								</div>
								<span id="email_validation_message"></span> <!-- Span to show email validation message -->
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Password</label>
									<input id="password" name="password" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Confirm Password</label>
									<input id="confirm_password" name="confirm_password" type="password" class="form-control" required="">
									<span id="password_match_message"></span> <!-- Span to show password match message -->
								</div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember" onclick="togglePasswordVisibility('password', 'confirm_password','customControlAutosizing')">
									<label class="custom-control-label" for="customControlAutosizing">Show Password</label>
								</div>
								<a href="forget-password.html" class="ml-auto">Forgot Password?</a>
							</div>
						</div>

						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Realtime Password match validation -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');
        const messageSpan = document.getElementById('password_match_message');

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password !== confirmPassword) {
                messageSpan.textContent = "Passwords do not match.";
                messageSpan.style.color = "red";
                confirmPasswordInput.style.borderColor = "red";
                return false;
            } else {
                messageSpan.textContent = ""; // Clear previous error message
                confirmPasswordInput.style.borderColor = "";
                return true;
            }
        }

        confirmPasswordInput.addEventListener('input', validatePassword);
    });
</script>


<!-- On submit Password match validation -->
<script>
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        var messageSpan = document.getElementById("password_match_message");

		// Get the URL parameters
		const urlParams = new URLSearchParams(window.location.search);
		// Get the value of the 'password' parameter
		const passwordParam = urlParams.get('password');

        if (password != confirmPassword) {
            messageSpan.innerHTML = "Passwords do not match.";
            messageSpan.style.color = "red";
            document.getElementById("password").style.borderColor = "red";
            document.getElementById("confirm_password").style.borderColor = "red";
            return false;
        } else {
            messageSpan.innerHTML = ""; // Clear previous error message
            document.getElementById("password").style.borderColor = "";
            document.getElementById("confirm_password").style.borderColor = "";
            return true;
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const emailParam = urlParams.get('email');
        const emailInput = document.getElementById('email');
        const messageSpan = document.getElementById('email_validation_message');

        if (emailParam == "notvalid") {
            messageSpan.textContent = "Invalid email format.";
            messageSpan.style.color = "red";
            emailInput.style.borderColor = "red";
        }
    });
</script>

<script>
    function togglePasswordVisibility(password, confirmPassword, checkbox) {
        var passwordInput = document.getElementById(password);
		var confirmPasswordInput = document.getElementById(confirmPassword);
        var checkbox = document.getElementById(checkbox);

        if (checkbox.checked) {
            passwordInput.type = "text";
			confirmPasswordInput.type = "text";
        } else {
			passwordInput.type = "password";
			confirmPasswordInput.type = "password";
        }
    }
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
