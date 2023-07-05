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
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="./assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="./assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="./assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>
<body>
    <!-- Section Navbar V1 -->
    <?php include_once "./template/header.php" ?>
	<!-- /.Section Navbar V1 -->
	<!-- Section Slider 02 -->
	<div id="section-slider" class="slider01">
		<!-- Slider Image -->
		<div class="slider-image">
			<img class="img-fluid" src="https://source.unsplash.com/1600x500/?technology,robot,flyingcars" alt="Zola">
		</div>
		<!-- /.Slider Image -->
    </div>
    <!-- /.Section Slider 02 -->
    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 col-lg-8">
    				<div class="row">
					<?php
						include("config.php");
						$sql = "SELECT Post_ID,title,description,author,featured, category from posts where status='publish' and category='technology' order by date desc;";
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
													<h2>".substr($row['title'], 0, strrpos($row['title'], ' ', 50-strlen($row['title']))) ."...</h2>
												</a>
											</div>
											<!-- /.Title -->
											<!-- Description -->
											<div class='desc'>
												<p>".strip_tags(substr($row['description'], 0, strrpos($row['description'], ' ', 100-strlen($row['description'])))) ."...</p>
											</div>
											<!-- /.Description -->
										</div>
										<!-- Content Wrapper -->
										<!-- Peoples -->
										<div class='peoples'>
											<div class='list-users-04'>
												<ul class='images'>
													<li><img src='./assets/images/profile_25.jpg' alt='Zola'></li>
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
	<?php include_once "./template/footer.php" ?>
	<!-- /.Section Footer -->

    <!-- Javascript Files -->
	<script src="./assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="./assets/js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="./assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="./assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="./assets/js/easy-waypoint-animate.js"></script>
	<!-- Counter -->
	<script src="./assets/js/jquery.countup.js"></script>
	<!-- Counter -->
	<script src="./assets/js/jquery.countup.js"></script>
	<!-- NProgress -->
	<script src="./assets/js/nprogress.js"></script>
	<!-- Ticker -->
	<script src="./assets/js/jquery.newsTicker.min.js"></script>
	<!-- Scripts -->
	<script src="./assets/js/scripts.js"></script>
	

</body>
</html>


