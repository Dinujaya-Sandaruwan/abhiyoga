
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/image-slider.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/shrink.css">
		<link rel="stylesheet" href="css/mobile-nav.css">
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	</head>
	<body>

	
		<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."navigation.php"); ?>


		<div class="container">

			<!--වම් Side Bar එක-->

			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."left-side.php"); ?>



		<!--මැද කෑල්ල (ප්‍රධාන කොටස)-->

		<div class="main-content">

			<!--Facebook Stories වගේ Photo set එකක් තියන තැන-->
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."story.php"); ?>

			<!--අලුතෙන් News දාන්න පුලුවන් වගේ පේන තැන-->
			<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."write-post.php"); ?>

			<!--About School-->
			<div class="post-container">
					<div class="post-row">
						<div class="user-profile">
							<img src="images/profile-pic.png">
							<div>
								<p>Mayurapada Central College</p>
								<span>June 21 2021, 13:40</span>
							</div>
						</div>
						<a href="#">
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</div>
					
					<p class="post-text"><strong>About Mayurapada Central College</strong><br><br>

                        Mayurapada Central College was started in 1944 as one of the Central Colleges that were created during the decade of 1940 according to the concept of the pioneer, Dr. C. W. W. Kannangara, “The Father of free education” of Sri Lanka.

						<br> <a href="index.php">View Less...</a> 					</p>
					
                        <img src="images/about-banner.jpg" class="post-img"alt="">


					<div class="post-row like-buttons">
						<div class="activity-icons">
							<div>
								<img src="images/like-blue.png">
								120
							</div>
							<div>
								<img src="images/comments.png">
								19
							</div>
							<div>
								<img src="images/share.png">
								120
							</div>
						</div>
						<div class="post-profile-icon">
							<img src="images/profile-pic.png">
							<i class="fas fa fa-caret-down"></i>
						</div>
					</div>
			</div>

		</div>

		<!--දකුණු පැත්තෙ Sidebar එක-->
		<div class="right-sidebar">
		<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."right-side.php"); ?>
		</div>


		<button type="button" class="load-more-btn">Load More</button>




			

			

		</div>


		
		<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."footer.php"); ?>





		<!--Java Script-->

		<script src="js/script.js"></script>
		<script src="js/popup.js"></script>
	</body>
</html>