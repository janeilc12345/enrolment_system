<?php
include "../backend/count.php";
include "../backend/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../assets/images/je.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Enrollment System</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
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
								
								<!-- Logout link -->
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
			
			<nav class="ttr-sidebar-navi">
				<ul>
					<?php 
						if($_SESSION['role'] == 1){
					?>
					<li>
						<a href="index.php" class="ttr-material-button" style="background: linear-gradient(45deg, #B6F492 0%, #338B93 100%);">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashboard</span>
		                </a>
		            </li>
					<?php 
						}
					?>

					<?php 
						if($_SESSION['role'] != 1){
					?>
					<li>
						<a href="courses.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Courses</span>
		                </a>
		            </li>
					<?php 
						}
					?>
					
					<li>
						<a href="review.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
		                	<span class="ttr-label">Review Students</span>
		                </a>
		            </li>

					<?php 
						if($_SESSION['role'] != 1){
					?>
					<li>
						<a href="add-listing.html" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
		                	<span class="ttr-label">Enroll</span>
		                </a>
		            </li>

					<?php 
						}
					?>
					
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
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-2 col-xl-2 col-sm-6 col-12">
					<div class="widget-card widget-bg1">					 
						<div class="wc-item">
							<h4 class="wc-title">
								STEM
							</h4>
							<span class="wc-des">
								students enrolled
							</span>
							<span class="wc-stats">
								<span class="counter"><?php echo stem(); ?></span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo stemPercent(); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?php echo round(stemPercent(),2); ?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-xl-2 col-sm-6 col-12">
					<div class="widget-card widget-bg2">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 ABM
							</h4>
							<span class="wc-des">
							students enrolled
							</span>
							<span class="wc-stats counter">
							<?php echo abm(); ?>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo abmPercent(); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?php echo round(abmPercent(),2); ?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-xl-2 col-sm-6 col-12">
					<div class="widget-card widget-bg3">					 
						<div class="wc-item">
							<h4 class="wc-title">
								GAS
							</h4>
							<span class="wc-des">
							students enrolled
							</span>
							<span class="wc-stats counter">
							<?php echo gas(); ?>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo gasPercent(); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?php echo round(gasPercent(),2); ?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-xl-2 col-sm-6 col-12">
					<div class="widget-card widget-bg4">					 
						<div class="wc-item">
							<h4 class="wc-title">
								ICT
							</h4>
							<span class="wc-des">
							students enrolled
							</span>
							<span class="wc-stats counter">
							<?php echo ict(); ?>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo ictPercent(); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?php echo round(ictPercent(),2); ?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-xl-2 col-sm-6 col-12">
					<div class="widget-card widget-bg5">					 
						<div class="wc-item">
							<h4 class="wc-title">
								HE
							</h4>
							<span class="wc-des">
							students enrolled
							</span>
							<span class="wc-stats counter">
							<?php echo he(); ?>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo hePercent(); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?php echo round(hePercent(),2); ?>%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Students Enrolled</h4>
						</div>
						<div class="widget-inner">
							<canvas id="chart" width="100" height="45"></canvas>
						</div>
					</div>
				</div>
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


</body>

</html>