<?php
	session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zola">
    <meta name="description" content="Concept Magazine News Blogs">
    <title>Zola | Blog 01</title>
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
<body>
    <!-- Section Navbar V1 -->
    <?php include_once "./template/header.php" ?>
	<!-- /.Section Navbar V1 -->
	<!-- Section Slider 02 -->
	<div id="section-slider" class="slider04">
		<!-- Slider Content -->
		<div class="slider-content">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-12">
						<!-- Item -->
	    				<?php
							include("config.php");
							$sql = "SELECT Post_ID,title,description,author,featured, category from posts where status='publish' order by visitors desc limit 2;";
							$result = $db->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									$stmt=$db->prepare("SELECT Name from users where email=?;");
									$stmt->bind_param("s",$row['author']);
									$stmt->execute();
									$result2 =$stmt->get_result();
									$row2 = $result2->fetch_assoc();
									echo "<div class='thumbnail-1'>
									<a href='view_post.php?pid=".$row['Post_ID']."'>
										<img src='assets/uploads/".$row['featured']."' alt='Zola'>
										<div class='overlay'>
											<div class='overlay-content'>
												<div class='list-users-02'>
													<ul class='images'>
														<li><img src='assets/images/profile_11.jpg' alt='Zola'></li>
													</ul>
													<p><span>".$row2['Name']."</span></p>
													<h3>".explode("\n", wordwrap($row['title'],50,"...<br>\n",TRUE))[0]."</h3>
													<div class='like'>
														<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg'
															xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 481.567 481.567'
															style='enable-background:new 0 0 481.567 481.567;' xml:space='preserve'>
															<path d='M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8
																							c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9
																							c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3
																							c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9
																							l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6
																							c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1
																							C482.9,128.041,462.2,84.641,424.7,55.841z'></path>
														</svg>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>";
								}
							}
						?>
						<!-- /.Item -->
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <!-- /.Slider Content -->
    </div>
    <!-- /.Section Slider 02 -->
    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 col-lg-8">
    				<div class="row">
					<?php
						$sql = "SELECT Post_ID,title,description,author,featured, category from posts where status='publish' order by date desc;";
						$result = $db->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								$stmt=$db->prepare("SELECT Name from users where email=?;");
								$stmt->bind_param("s",$row['author']);
								$stmt->execute();
								$result2 =$stmt->get_result();
								$row2 = $result2->fetch_assoc();
								echo "<div class='col-12 col-lg-6'>
								<div class='block-style-12'>
									<!-- Contents -->
									<div class='contents'>
										<!-- Thumbnail -->
										<div class='thumbnail-1'>
											<span class='bg-purple'>".$row['category']."</span>
											<a href='view_post.php?pid=".$row['Post_ID']."'>
												<img src='assets/uploads/".$row['featured']."'width='280px' height='190px'>
											</a>
										</div>
										<!-- /.Thumbnail -->
										<!-- Content Wrapper -->
										<div class='content-wrapper'>
											<!-- line -->
											<div class='line'>
											</div>
											<!-- /.line -->
											<!-- Title -->
											<div class='title'>
												<a href='view_post.php?pid=".$row['Post_ID']."'>
													<h2>".explode("\n", wordwrap($row['title'],50,"...<br>\n",TRUE))[0]."</h2>
												</a>
											</div>
											<!-- /.Title -->
											<!-- Description -->
											<div class='desc'>
												<p>".explode("\n", wordwrap($row['description'],100,"...<br>\n",TRUE))[0]."</p>
											</div>
											<!-- /.Description -->
										</div>
										<!-- Content Wrapper -->
										<!-- Peoples -->
										<div class='peoples'>
											<div class='list-users-04'>
												<ul class='images'>
													<li><img src='assets/images/profile_25.jpg' alt='Zola'></li>
												</ul>
												<p>".$row2['Name']."</p>
											</div>
										</div>
										<!-- /.Peoples -->
									</div>
									<!-- /.Contents -->
								</div>
							</div>	";
							}
						} else {
							echo "No Posts Yet";
						}
						
						?>
						
						
						
						<div class="ts-space20"></div>
						<!-- Pagination -->
						<div class="col-12">
							<ul class="pagination justify-content-center">
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
						<!-- /.Pagination -->
						<div class="ts-space25"></div>
		    		</div>
	    		</div>
    			<!-- Block Style 3, 4, 5 -->
    			<?php include "newly-added.php"?>
    			<!-- /.Block Style 3, 4, 5 -->
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->
	<!-- Section Footer -->
	<?php include "./template/footer.php" ?>
	<!-- /.Section Footer -->

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
