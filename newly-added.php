<?php
	function secondsToDhms($seconds) {
		$seconds = $seconds;
		$y = floor($seconds / (3600*24*365));
		$mm = floor($seconds / (3600*24*30));
		$d = floor($seconds / (3600*24));
		$h = floor($seconds % (3600*24) / 3600);
		$m = floor($seconds % 3600 / 60);
		$s = floor($seconds % 60);
		$dDisplay = abs($d).($d == 1 ? " day ago" : " days ago");
		if($d>1){
			$hDisplay = abs($h).($h == 1 ? " hour ago" : " hours ago");
			if($h>1){
				$mDisplay = abs($m).($m == 1 ? " minute ago" : " minutes ago");
				if($m>1){
					$sDisplay = abs($s).($s == 1 ? " second ago" : " seconds ago");
					return $sDisplay;
				}
				else{
					return $mDisplay;
				}
			}
			else {return $hDisplay;}
		}
		else{ return $dDisplay; }
	}
?>

<div class="col-12 col-lg-4">
    				<div class="block-style-10">
    					<div class="block-title-1">
							<h3>NEWLY ADDED BLOG</h3>
							<img src="assets/images/svg/more-1.svg" alt="Zola">
						</div>
    					<div class="small-list-posts">
							<!-- Item -->
							<?php
								$sql = "SELECT Post_ID,title,description,author,featured,date, category from posts where status='publish' order by date desc limit 4;";
								$result = $db->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$stmt=$db->prepare("SELECT Name from users where email=?;");
										$stmt->bind_param("s",$row['author']);
										$stmt->execute();
										$result2 =$stmt->get_result();
								$row2 = $result2->fetch_assoc();
										echo "<div class='item'>
											
												<div class='thumbnail-img'>
												<img src='assets/uploads/".$row['featured']."'width='80px' height='80px'>
												</div>
												<div class='content'>
                                                    <a href='view_post.php?pid=".$row['Post_ID']."'>
													<h3>".explode("\n", wordwrap($row['title'],50,"...<br>\n",TRUE))[0]."</h3></a>
													<span>".
													secondsToDhms(strtotime($row["date"])-time()) ."</span>
												</div>
											</a>
										</div>";
									}
								} else {
									echo "No Posts Yet";
								}
								$db->close();
							?>
							
							<!-- Item -->
						</div>
    				</div>
    				<div class="ts-space50"></div>
    				
    				
    				<div class="block-style-5">
						<div class="block-title">
							<h3>OUR SPONSORS</h3>
						</div>
						<div class="block-content">
							<div class="block-wrapper">
								<ul>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_02.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_03.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_04.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_05.jpg" alt="Zola"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ts-space50"></div>
					
    			</div>

