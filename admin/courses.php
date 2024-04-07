<?php
include "../backend/session.php";
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
						<a href="index.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashboard</span>
		                </a>
		            </li>
					<?php
						}
					?>
					<li>
						<a href="courses.php" class="ttr-material-button" style="background: linear-gradient(45deg, #B6F492 0%, #338B93 100%);">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Strands</span>
		                </a>
		            </li>

					<li>
						<a href="enrolment.php" class="ttr-material-button">
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
				<h4 class="breadcrumb-title">Strands</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Strands</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Strands</h4>
						</div>
						<div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/STEM.png" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Science, Technology, Engineering, and Mathematics (STEM)</h4>
									</div>
									
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Strand Description</h6>
											<p><?php echo strtoupper("Designed to prepare students who express keen interest in taking college degrees focused on Science, Technology, Engineering, and Mathematics (STEM), senior high school students will be exposed to learning activities that will hone their knowledge and skills in analyzing data, understanding real-world impacts, and conducting research.") ?></p>	
										</div>
										<div class="col-md-12">
											<a href="enrolment.php?strand=STEM" class="btn green radius-xl outline">Enroll Now!</a>
										</div>
									</div>
									
								</div>
							</div>
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/ABM.png" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Accountancy, Business and Management</h4>
									</div>
									
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Strand Description</h6>
											<p><?php echo strtoupper("The Accountancy, Business and Management (ABM) strand marries creativity, mathematical application, and business sense to prepare the best business professionals of tomorrow. Taking ABM subjects in senior high school will introduce students to the concepts of financial management, business management, corporate operations, and accounting. Students who select this route will be prepared for colourful careers as managers, accountants, and business owners. Students who select this route will be prepared for colorful careers as managers, accountants, and business owners. These ABM courses will equip them with the necessary industry know-how and skills to perform well in their professions and run their businesses smoothly.

Designed to prepare students who are inclined to take college degrees related to business and management programs, taking ABM in senior high school will be about the basic principles of the various functional areas of business such as marketing, finance and accounting, information and technology, and entrepreneurship. The ABM strand is the perfect combination of practical skills and application, as well as shaping senior high school students to adopt the right mindset for crisis management and problem solving on the job and behind their businesses.") ?></p>	
										</div>
										<div class="col-md-12">
											<a href="enrolment.php?strand=ABM" class="btn green radius-xl outline">Enroll Now!</a>
										</div>
									</div>
									
								</div>
							</div>

							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/GAS.png" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>General Academic Strand</h4>
									</div>
									
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Strand Description</h6>
											<p><?php echo strtoupper("Designed to prepare students who are more inclined to general areas of study rather than specialized fields, GAS will present the option for SHS students to take their electives from specialized subjects of any other strands.") ?></p>	
										</div>
										<div class="col-md-12">
											<a href="enrolment.php?strand=GAS" class="btn green radius-xl outline">Enroll Now!</a>
										</div>
									</div>
									
								</div>
							</div>
							
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/ICT.png" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Information and Communication Technology</h4>
									</div>
									
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Strand Description</h6>
											<p><?php echo strtoupper("Information Communication and Technology or ICT Strand is one of the strands offered under Technical-Vocational Livelihood (TVL) Track of K-12 curriculum. ICT strand subjects seek to teach students concepts and skills in information technology.

ICT in Senior High School equips students with the skills and knowledge they need to qualify for TESDA-backed certifications such as the Certificate of Competency (COC) and National Certifications (NC). These ICT strand courses ensure that TVL track graduates of the ICT strand in SHS can apply for IT jobs straight out of high school.") ?></p>	
										</div>
										<div class="col-md-12">
											<a href="enrolment.php?strand=ICT" class="btn green radius-xl outline">Enroll Now!</a>
										</div>
									</div>
									
								</div>
							</div>
						
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="assets/HE.png" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Home Economics</h4>
									</div>
									
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Strand Description</h6>
											<p><?php echo strtoupper("Students with home economics specializations will be able to demonstrate the necessary skills, competencies, and values in taking care of oneself and one’s family, and in providing efficient services to others and to the community.") ?></p>	
										</div>
										<div class="col-md-12">
											<a href="enrolment.php?strand=HE" class="btn green radius-xl outline">Enroll Now!</a>
										</div>
									</div>
									
								</div>
							</div>

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
</body>

</html>