<?php
	session_start();
	include('config.php');
	if(isset($_POST['pid']))
	{
		$p=$_POST['pid'];
	}
	if(isset($_GET['pid']))
	{
		$p=$_GET['pid'];
	}
	if(isset($_POST['comment']))
	{
		
		if(!empty($_POST['com']))
		{

			$com= $_POST['com'];
			$mail= $_POST['email'];
			$p=$_POST['pid'];
			$stmt = $db->prepare("insert into comments (content,author,date,Post_ID) values (?,?,now(),?)");
			$stmt->bind_param("sss", $com, $mail, $p);
			if ($stmt->execute()){
				echo "comment added!";
			}
			else{
				echo "<script>alert('Comment not Added!');</script>";
			}
			header("Location: view_post.php?pid=".$_POST['pid']);
		}
		else
		{
			"Blank Comment";
		}
	}
	if(isset($_POST['deletecomment']))
	{
		$stmt=$db->prepare("DELETE FROM comments WHERE C_ID=?");
		$stmt->bind_param("s",$_POST['cid']);
	if ($stmt->execute() === TRUE) {
		echo "Comment deleted successfully";
		header("Location: view_post.php?pid=".$_POST['pid']);
	} else {
		echo "Error deleting Post ";
		header("Location: view_post.php?pid=".$_POST['pid']);
	}

	$conn->close();
	}

	
	$stmt = $db->prepare("SELECT title,description,author,date,featured,visitors,category,Name
	from posts JOIN users ON posts.author = users.email
	where Post_ID=?");
	$stmt->bind_param("s", $p);
	$stmt->execute();
	if ($result = $stmt->get_result()) {
		$row = $result->fetch_assoc();
		$stmt = $db->prepare("UPDATE posts SET visitors=visitors+1 WHERE Post_ID=?");
		$stmt->bind_param("s", $p);
		$stmt->execute();
	}
	else
	{
		header("Location: error-404.php");
	}


?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Zola">
	<meta name="description" content="Concept Magazine News Blogs">
	<title>Zola | Author 01</title>
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
	<div class="ts-space60"></div>
	<!-- Section Contents -->
	<div id="section-contents">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">
					<div class="row">
						<div class="col-12">
							<!-- Block Style 16 -->
							<div class="block-style-16">
								<?php 
									$date=date_create($row['date']);
									$head = date_format($date,"F d, Y - g:i A");
									echo "<h6><span>".strtoupper($row['category'])."BLOG</span> &nbsp;&nbsp;".$head."</h6>" ?>
								<h1><?php echo $row['title']?></h1>
								<div class="list-users-05">
									<ul class="images">
										<li><img src="assets/images/list_user1.jpg" alt="Zola"></li>
									</ul>
									<p><span><?php echo ucwords($row['Name'])?></span></p>

								</div>
							</div>
							<!-- /.Block Style 16 -->
							<!-- Block Style 17 -->
							<div class="block-style-17">
								<span class="bg-orange"><?php echo $row['category']?></span>
								<img class="img-fluid" src="assets/uploads/<?php echo $row['featured']?>" alt="Zola">
							</div>
							<!-- /.Block Style 17 -->
							<!-- Block Style 18 -->
							<div class="block-style-18">
								<?php echo $row['description']?>
							</div>
							<!-- /.Block Style 18 -->
							<!-- Block Style 19 -->

							<!-- /.Block Style 19 -->
							<!-- Block Style 20 -->
							<div class="ts-space25"></div>
							<div class="col-12">
								<div class="block-style-2">
									<!-- Block Title 2 -->
									<div class="block-title-2">
										<h3>COMMENTS</h3>
									</div>
									<!-- /.Block Title 2 -->
									<!-- Contents -->
									<div class="contents">
									
									
										<?php
											$nocomment = 0;
											$stmt = $db->prepare("SELECT content,author,date,C_ID,Name from comments c Join users u on c.author = u.Email where Post_ID=?");
											$stmt->bind_param("s", $p);
											$stmt->execute();
											$result3 = $stmt->get_result();
											$nocomment = true;
											while($row3 = $result3->fetch_assoc())
											{
												$nocomment=false;
												
												echo "
												<div class='comments'>
												<!-- Comment Item -->
													<div class='media'>
														<div class='img-frame1'>
															<img class='mr-3' src='assets/images/profile_8.jpg' alt='Zola'>
														</div>
														
														<div class='media-body'>
															<h5 class='mt-0'>".ucwords($row3['Name'])."<span></h5>
															<div class='row'>
																<div class='col-10'>
																	<p>".$row3['content']."</p>";
												
												if(isset($_SESSION['ID']))
												{
													if($row3['author']==$_SESSION['ID'] || $row['author']==$_SESSION['ID'])
													{
														echo "	</div>
																<div class='col-2'>
																	<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='POST'>
																		<input type='text' name='pid' value='".$p."'
																			style='display:none;'></input>
																		<input type='text' name='cid' value='".$row3['C_ID']."'
																			style='display:none;'></input>
																		<button type='submit' class='btn btn-outline-danger fa fa-trash-o' name='deletecomment' style='margin-top:-20px;'></button>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>";
													}
													else{
														echo "		</div>
																</div>
															</div>
														</div>
													</div>";
													}
												}
												else{
													echo "		</div>
															</div>
														</div>
													</div>
												</div>";
												}
											}

											
											
											echo "<div class='see-all-comments add-comment'>";

											if(isset($_SESSION['ID']))
											{
												echo "<div class='row'>
														<div class='form-group col-12'>
															<div class='bg-light p-2'>
																<form action='view_post.php' method='POST'>
																	<div class='d-flex flex-row align-items-start'>
																		<input type='text' name='email'  class='nodisp' value='".$_SESSION['ID']."' style='display:none'/>
																		<input type='text' name='pid'  class='nodisp' value='".$p."' style='display:none'/>
																		<br>
																		<img class='mr-3' src='assets/images/profile_8.jpg' alt='Zola'>
																		<textarea class='form-control ml-1 shadow-none textarea' name='com'></textarea>
																	</div>
																	<div class='mt-2 text-right'>
																		<button class='btn btn-warning btn-sm shadow-none' name='comment' type='submit'>Comment</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													</div></div>";
											}
											else
											{
												echo "<a href='login.php'>Log In To Post Comments</a></div></div>";
											}
												
										?>
									
									
									<!-- /.Contents -->
								</div>
							</div>
							
							<!-- Block Style 20 -->
						</div>

						<div class="ts-space25"></div>
					</div>
				</div>
				<!-- Newly added Blog -->
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