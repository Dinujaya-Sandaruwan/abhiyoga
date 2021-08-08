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
								<span>June 21 2021, 13:40</span>
							</div>
						</div>
						<a href="#">
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</div>
					
					<p class="post-text"><strong>සොඳුරු මිනිසාගේ නික්ම යෑම </strong><br><br>මයුරපාද මධ්‍ය විද්‍යාලයේ ගරු විදුහල්පති තුමන් ලෙස දෙවසරකට වැඩි කලක් සේවය කරන ලද රසික දිනේෂ් චතුරංග මැතිදුන් ස්ථාන මාරු ලබා පාසලට සමුදීමේ උත්කර්ෂවත් අවස්ථාව 2020/03/04 දින විද්‍යාලයීය අභිනව විදුහල්පතිනි බන්දුලානි බස්නායක මැතිනියගේ මෙහෙයවීමෙන් විදුහල් භූමියේදී පැවැත්විය.පාසලේ විෂය මෙන්ම විෂය බාහිර කටයුතු වෙනුවෙන්ද වැඩි ඉඩක් වෙන්කරමින දරුවන්ගේ අධ්‍යාපන හා මානසික සංවර්ධනය වෙනුවෙන් කැපවූ මයුරපාදය තුලින් දුටු විශිෂ්ඨතම විදුහල්පති ලෙසින් එතුමානන් එදින සමස්ථ මයුරපාද පාසල් ප්‍රජාවගේ ගෞරව සම්මානයට පාත්‍ර විය.<br>  විද්‍යාලයීය ආදි ශිෂ්‍ය සංගමය හා පාසල් සංවර්ධන සමිතියත් අධ්‍යායන  අනධ්‍යයන කාර්‍ය මන්ඩලයත් හා එක්ව ගෙවී ගිය දෙවසර තුල පාසල භෞතික සංවර්ධනය තුලින් ඉහළින් ඔසවා තැබීමේ ගෞරවයද එතුමාට හිමිවේ..එවන් ස්වර්ණමය යුගයක් පාසලට එක් කල ආදරණීය ගුරු පියාණන් සිසු දරුවන්ගේත් සමස්ත ප්‍රජාවගේත් නෙතට  කදුලක් එක් කරමින් මෙසේ මයුරමාතාවගෙන් සමුගන්නා ලදී..
						<br> <a href="index.php">View Less...</a> 					</p>
					
						<div class="slideshow-container">

							<div class="mySlides fade">
							  <div class="numbertext">1 / 3</div>
							  <img src="images/principle transfer/1.jpg" style="width:100%">
							</div>
							
							<div class="mySlides fade">
							  <div class="numbertext">2 / 3</div>
							  <img src="images/principle transfer/2.jpg" style="width:100%">
							</div>
							
							<div class="mySlides fade">
							  <div class="numbertext">3 / 3</div>
							  <img src="images/principle transfer/3.jpg" style="width:100%">
							</div>
							
							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>
							
							</div>
							<br>
							
							<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span> 
							  <span class="dot" onclick="currentSlide(2)"></span> 
							  <span class="dot" onclick="currentSlide(3)"></span> 
							</div>


					<div class="post-row like-buttons">
						<div class="activity-icons">
							<div>
								<img src="images/like-blue.png">
								485
							</div>
							<div>
								<img src="images/comments.png">
								259
							</div>
							<div>
								<img src="images/share.png">
								358
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