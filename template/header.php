
<header class="header-03">
    	<div class="topbar-02">
    		<div class="container">
    			<div class="row">
    				<div class="left col-7">
		    			<div class="ticker-header">Breaking News</div>
						<ul class="ticker-content">
						    <li><a href="#">New impacts of abrupt growth in the economy generates a lot of emotion_</a></li>
						    <li><a href="#">Curabitur porttitor ante eget hendrerit adipiscing.</a></li>
						    <li><a href="#">New impacts of abrupt growth in the economy generates a lot of emotion_</a></li>
						    <li><a href="#">Nunc ultrices tortor eu massa placerat posuere.</a></li>
						</ul>
		    		</div>
		    		<div class="right col-5">
		    			<div class="social-links">
			                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
			                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
			                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
			                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
			            </div>
		    		</div>
    			</div>
    		</div>
    	</div>
		<nav class="navbar-menu navbar navbar-expand-lg">
	        <div class="container navbar-container">
	            <!-- Logo -->
	            <a class="navbar-brand" href="index.php"><img src="assets/images/logo-02.png" alt="Zola"></a>
	            <!-- /.Logo -->
	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav mr-auto">
	                	<li class="nav-item">
		                    <a href="./world.php" class="nav-link">World</a>
		                </li>
		                <li class="nav-item">
		                    <a href="./technology.php" class="nav-link">Technology</a>
		                </li>
		                <li class="nav-item">
		                    <a href="./sports.php" class="nav-link">Sport</a>
		                </li>
		                <li class="nav-item">
		                    <a href="./health.php" class="nav-link">Health</a>
		                </li>
						<li class="nav-item">
		                    <a href="./travel.php" class="nav-link">Travel</a>
		                </li>
						<li class="nav-item">
		                    <a href="./entertainment.php" class="nav-link">Entertainment</a>
		                </li>
	                </ul>	
					
	            </div>
				<div class="collapse navbar-collapse float-xl-left" id="navbarSupportedContent"></div>
				<?php  
					if(!isset($_SESSION["name"]))
					{
						
						echo "<ul class='navbar-nav '>
							<li class='nav-item'>
								<a class='nav-link' href='./register.php'>Register</a>
							</li>
						</ul>
						<ul class='navbar-nav '>
							<li class='nav-item'>
								<a class='nav-link' href='./login.php'>Login</a>
							</li>
						</ul>";
					}
						else {
						
						echo "<ul class='navbar-nav '>
						<li class='nav-item'>
							<a class='nav-link' href='admin/addPost.php'>Add Post</a>
						</li>
					</ul><ul class='navbar-nav '> <li class='nav-item dropdown-submenu dropdown'>
							<a class='dropdown-item dropdown-toggle nav-link' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".ucwords($_SESSION['name'])." </a> <ul class='dropdown-menu'> <li><a href='admin/dashboard.php' class='dropdown-item'>Dashboard</a></li> <li><a href='./logout.php' class='dropdown-item'>Logout</a></li>
							</ul>
						</li>";
					}
				?>
		
	            </div>
				
	            <!-- Search Navbar -->
	            
                <!-- /.Search Navbar -->
	            
	        </div>
    	</nav>
    </header>