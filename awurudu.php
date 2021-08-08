<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/image-slider.css">
        <link rel="stylesheet" href="css/one-page-style.css">
		<link rel="stylesheet" href="css/mobile-nav.css">
		<link rel="stylesheet" href="css/mobile-nav.css">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	</head>
	<body>
		<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."navigation.php"); ?>

		<div class="container">

			<!--වම් Side Bar එක-->

			<div class="left-sidebar-one">

					<div id="vision-popup" class="modal">



					</div>
			</div>


		<!--මැද කෑල්ල (ප්‍රධාන කොටස)-->

		<div class="main-content-one">


				<!--පළවෙනි News එක-->
				<div class="post-container">
					<div class="post-row">
						<div class="user-profile">
							<img src="images/profile-pic.png">
							<div>
								<p>Mayurapada Central College</p>
								<span>October 01 2019, 19:20</span>
							</div>
						</div>
						<a href="#">
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</div>
					
					<p class="post-text"><strong>මයුර කැකුළු සූර්ය මංගල්‍යය 2019</strong><br><br> 2019 මයුර කැකුළු සූර්ය මංගල්‍යය 2019 බක් මස දෙවනි දින විද්‍යාලයේදී පවත්වන ලදී…
සිංහල හින්දු චාරිත්‍ර වලට අනුකූලව උලෙළ සංවිධානය කර තිබීමත් කලාතුරකින් දැකිය හැකි ජන ක්‍රීඩා වෙනුවෙන්ද දවස වෙන් කර තිබීම විශේෂත්වයකි. <br> විදුහල්පතිතුමන්ගේ උපදෙස් පරිදි 6/7 අංශ භාර දිලීප් ගුනවර්ධන මහතාගේ මෙහෙයවීමෙන් එම අංශයේ ආචාර්ය මන්ඩලය සහ දෙමාපියන් උලෙළ සංවිධානය කිරීම වෙනුවෙන් කල කැපවීම අගය කොට සලකමු….  <a href="index.php">View Less...</a> 
					
						<div class="slideshow-container">

							<div class="mySlides fade">
							  <div class="numbertext">1 / 4</div>
							  <img src="images/awurudu/1.jpg" style="width:100%">
							</div>
							
							<div class="mySlides fade">
							  <div class="numbertext">2 / 4</div>
							  <img src="images/awurudu/2.jpg" style="width:100%">
							</div>
							
							<div class="mySlides fade">
							  <div class="numbertext">3 / 4</div>
							  <img src="images/awurudu/3.jpg" style="width:100%">
							</div>

							<div class="mySlides fade">
							  <div class="numbertext">4 / 4</div>
							  <img src="images/awurudu/4.jpg" style="width:100%">
							</div>                           
							
							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>
							
							</div>
							<br>
							
							<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span> 
							  <span class="dot" onclick="currentSlide(2)"></span> 
							  <span class="dot" onclick="currentSlide(3)"></span> 
							  <span class="dot" onclick="currentSlide(4)"></span> 
							</div>


					<div class="post-row like-buttons">
						<div class="activity-icons">
							<div>
								<img src="images/like-blue.png">
								856
							</div>
							<div>
								<img src="images/comments.png">
								258
							</div>
							<div>
								<img src="images/share.png">
								325
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

			<div class="right-sidebar-one">
                
			</div>

		</div>

        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/abhiyoga/assects/php/"; include($IPATH."go-to-home.php"); ?> <br>

		<div class="footer">
			<p>Copyright 2021 - Mayurapada Central College Narammala</p>
		</div>



        <br><br>



        <script>

var settingsMenu = document.querySelector('.settings-menu');
var darkBtn = document.getElementById('dark-btn');

function settingsMenuToggle(){
	settingsMenu.classList.toggle('settings-menu-height');
}

darkBtn.onclick = function(){
	darkBtn.classList.toggle('dark-btn-on');
	document.body.classList.toggle('dark-theme');
}


//Image Slider Script

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
     </script>
		
<script src="js/script.js"></script>

	</body>
</html>