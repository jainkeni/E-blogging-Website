<?php
		session_start();
		include 'config.php';
		if(isset($_SESSION["ID"])){
			header("location: index.php");
			exit;
		}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zola">
    <meta name="description" content="Concept Magazine News Blogs">
    <title>Zola | Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body class="bg-grey2">

	<?php include_once "template/header.php" ?>
	<!-- Section Slider 05 -->
	<div id="section-slider" class="slider05 v3">
		<!-- Slider Content -->
		<div class="slider-content">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-12">
	    				<a href="index.html"><img src="assets/images/logo-small-2.png" alt="Zola"></a>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <!-- /.Slider Content -->
		<!-- Slider Image -->
		<div class="slider-image">
			<img class="img-fluid" src="assets/images/slider6.jpg" alt="Zola">
		</div>
		<!-- /.Slider Image -->
    </div>
    <!-- /.Section Slider 05 -->
    <!-- Section Contents -->
    <div id="section-contents" class="login-01">
    	<div class="container">
    		<div class="row">
    			<!-- Block Style 1 -->
    			<div class="col-12">
    				<div class="block-style-29">
    					<div class="login-wrapper">
							<div class="title">
								<h3>Login Your Acount</h3>
							</div>
							<div class="contact-form">
								<!-- Form -->
								<form action="update.php" method="POST">
									<div class="row">
										<div class="form-group col-12">
											<input type="email" class="form-control" name="email" placeholder="Enter Registered Email ID" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-12">
											<button type="submit">Send Password</button>
										</div>
									</div>
								</form>
								<!-- /.Form -->
							</div>
						</div>
    				</div>
    			</div>
    			<!-- /.Block Style 1 -->
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->
	<?php include_once "template/footer.php" ?>
    <!-- Javascript Files -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Counter -->
	<script src="assets/js/jquery.countup.js"></script>
	<!-- Counter -->
	<script src="assets/js/jquery.countup.js"></script>
	<!-- NProgress -->
	<script src="assets/js/nprogress.js"></script>
	<!-- Ticker -->
	<script src="assets/js/jquery.newsTicker.min.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>
	

</body>
</html>
