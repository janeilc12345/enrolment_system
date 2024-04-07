<?php
include "../backend/session.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- FAVICONS ICON ============================================= -->
			<link rel="icon" href="../assets/images/je.png" />

<!-- PAGE TITLE HERE ============================================= -->
<title>Enrollment System</title>
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

	<style>
		/* Center the modal vertically */
.modal-dialog {
  display: flex;
  align-items: center;
  min-height: calc(100% - 60px); /* Adjust this value if you have a fixed header */
}

/* Center the modal horizontally */
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px; /* Set the maximum width of the modal */
    margin: auto;
  }
}

.logout {
    background-color: white; /* Example hover background color */
}


.logout:hover {
    background-color: #105420; /* Example hover background color */
    color: white; /* Example hover text color */
}

.cancel:hover {
    background-color: #105420; /* Example hover background color */
    color: white; /* Example hover text color */
}

.btn.btn-danger.btn-sm.delete-btn:hover{
	background: linear-gradient(to right, rgb(255, 65, 108), rgb(255, 75, 43)); /* Example hover background color */
    color: white; /* Example hover text color */
}

	</style>
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="index.html" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="assets/images/logo-mobile.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="../assets/images/je.png" width="50" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">CARLOS F. GONZALES HIGH SCHOOL ENROLMENT SYSTEM</a>
					</li>
				
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
				
				
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/default_profile.png" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
				
								<li><a href="#" id="logout-link">Logout</a></li>
							</ul>
						</div>
					</li>
					<!-- Logout modal -->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true" data-backdrop="false">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Are you sure you want to logout?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary cancel" data-dismiss="modal" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;border-color:black !important;">Cancel</button>
							<a href="../backend/logout.php" class="btn btn-secondary logout" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;border-color:black !important;">Logout</a>
						</div>
						</div>
					</div>
					</div>
				</ul>
				<!-- header right menu end -->
			</div>
		
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">

			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
				<?php
						if($_SESSION['role'] == 1) {
					?>
					<li>
						<a href="index.html" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashboard</span>
		                </a>
		            </li>
					<?php
						}
					?>
					<li>
						<a href="courses.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Strands</span>
		                </a>
		            </li>
					<li>
						<a href="enrolment.php" class="ttr-material-button" style="background: linear-gradient(45deg, #B6F492 0%, #338B93 100%);">
							<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
		                	<span class="ttr-label">Enroll</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">My Profile</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="user-profile.html" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
		                	</li>
		                	
		                </ul>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Enrolment form</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Enrolment Form</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Enrolment Form</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" action="../backend/enroll.php">
								<div class="row">
								<div class="col-12">
										<div class="ml-auto">
											<h3>1. Learner Reference Number</h3>
										</div>
									</div>
								<div class="form-group col-4">
										<label class="col-form-label">LRN</label>
										<div>
											<input class="form-control" type="text" value="" name="lrn" required>
										</div>
									</div>
									<div class="col-12">
										<div class="ml-auto">
											<h3>2. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Email Address</label>
										<div>
											<input class="form-control" type="email" value="" name="email">
										</div>
									</div>
									<div class="form-group col-4">
								
									</div>
									<div class="form-group col-4">
									
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Firstname</label>
										<div>
											<input class="form-control" type="text" value="" name="firstname">
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Middlename</label>
										<div>
											<input class="form-control" type="text" value="" name="middlename">
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Lastname</label>
										<div>
											<input class="form-control" type="text" value="" name="lastname">
										</div>
									</div>
									<div class="form-group col-4">
										<label class="col-form-label">Birthdate</label>
										<div>
											<input class="form-control" type="date" value="" name="birthdate">
										</div>
										</div>
										<div class="form-group col-4">
											<label class="col-form-label">Gender</label>
											<div>
												<select class="form-control" name="gender" id="gender">
													<option value="">Select</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
	
												</select>
											</div>
											</div>
											<div class="form-group col-12">
										<label class="col-form-label">Address</label>
										<div>
											<input class="form-control" type="text" value="" name="address">
										</div>
									</div>
							
									<div class="form-group col-6">
										<label class="col-form-label">Guardian Name</label>
										<div>
											<input class="form-control" type="text" value="" name="guardian">
										</div>
									</div>
									<div class="seperator"></div>
									<div class="form-group col-6">
										<label class="col-form-label">Guardian Contact No.</label>
										<div>
											<input class="form-control" type="text" value="" name="guardian_no">
										</div>
									</div>
									<div class="seperator"></div>
									<div class="form-group col-6">
										<label class="col-form-label">Student Contact No.</label>
										<div>
											<input class="form-control" type="text" value="" name="student_no">
										</div>
									</div>
									<div class="seperator"></div>
									
								
								
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Add Item</h3>
										</div>
									</div>
									<div class="form-group col-4">
											<label class="col-form-label">Strand</label>
											<div>
											<select class="form-control" name="strand" id="strand">
												<option value="" <?php echo (!isset($_GET['strand']) || $_GET['strand'] == '') ? 'selected' : ''; ?>>Select</option>
												<option value="STEM" <?php echo (isset($_GET['strand']) && $_GET['strand'] == 'STEM') ? 'selected' : ''; ?>>Science, Technology, Engineering, and Mathematics</option>
												<option value="ABM" <?php echo (isset($_GET['strand']) && $_GET['strand'] == 'ABM') ? 'selected' : ''; ?>>Accountancy, Business and Management</option>
												<option value="GAS" <?php echo (isset($_GET['strand']) && $_GET['strand'] == 'GAS') ? 'selected' : ''; ?>>General Academic Strand</option>
												<option value="ICT" <?php echo (isset($_GET['strand']) && $_GET['strand'] == 'ICT') ? 'selected' : ''; ?>>Information and Communication Technology</option>
												<option value="HE" <?php echo (isset($_GET['strand']) && $_GET['strand'] == 'HE') ? 'selected' : ''; ?>>Home Economics</option>
											</select>

											</div>
											</div>
									<div class="form-group col-4">
											<label class="col-form-label">Grade</label>
											<div>
												<select class="form-control" name="grade" id="grade">
													<option value="">Select</option>
													<option value="male">Grade 11</option>
													<option value="female">Grade 12</option>
							
												</select>
											</div>
											</div>
								
									<div class="col-12">
										
										<button type="submit" class="btn">Save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<script>
document.getElementById('logout-link').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default link behavior
  $('#logoutModal').modal('show'); // Show the modal
});
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
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
</body>

</html>