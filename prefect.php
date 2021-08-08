
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/image-slider.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/shrink.css">
		<link rel="stylesheet" href="css/mobile-nav.css">
        <link rel="stylesheet" href="css/prefect-table.css">
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


<style>
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
</style>

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

            <!--Prefects Banner-->
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
                <br>
					
                        <img src="images/prefects.png" class="post-img"alt="">


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

            <!--Head Prefects-->
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
                <br>
                <img id="myImg" src="images/head-prefect.png"  style="width:100%;">
                <!-- The Modal -->
                <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
                </div>


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

			<!--Junior Prefect-->
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
					
					<p class="post-text"><strong>JUNIOR PREFECT BOARD (GRADE 12)</strong><br><br> </p>

                    <table id="prefecs">
                            <tbody>
                            <tr>
                            <th>BOYS</span></th>
                            <th>GIRLS</span></th> </tr>

                            <tr>
                            <td>Nimsara Serasinghe - (11-G)</td>
                           <td> K.D.S.J. Gunathilaka - (11-A)</td>
                            </tr>

                            <tr>
                            <td>Chamindu Roshan - (11-B)</td>
                            <td>Y.A.H.D. Wijesinghe - (11-C)</td>
                            </tr>
                            <tr>
                            <td>Pasindu Wijesundara - ( Grade 11-E )</td>
                            <td>J.A.A.D. Dharmasena - ( Grade 11-D )</td>
                            </tr>
                            <tr>
                            <td>T.M.S.S. Thennakoon - ( Grade 11-C )</td>
                            <td>H.S.A.M. Senadeera - ( Grade 11-D )</td>
                            </tr>
                            <tr>
                            <td>H.A.C.N.G. Hettiarachchi - ( Grade 11-G )</td>
                            <td>R.V.H.T. Randunu - ( Grade 11-E )</td>
                            </tr>
                            <tr>
                            <td>R.S. Lakmeandu - ( Grade 11-D )</td>
                            <td>H.M.C.E.U. Samarakoon - ( Grade 11-F )</td>
                            </tr>
                            <tr>
                            <td>H.M.N.S. Herath - ( Grade 11-F )</td>
                            <td>R.T.I.S. Weerakoon - ( Grade 11-G )</td>
                            </tr>
                            </tbody>
                            </table>

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

            <!--Senior Prefect-->
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
					
					<p class="post-text"><strong>SENOIR PREFECT BOARD (GRADE 13)</strong><br><br> </p>

                    <table id="prefecs">
                        <tbody>
                        <tr>
                        <th>BOYS</th>
                        <th>GIRLS</span></th>
                        </tr>
                        <tr>
                        <td>A.M.N.C. Arampath - ( Grade 13- A ) </td>
                        <td>S.M.S.S. Senevirathna - (Grade 13-A)</td>
                        </tr>
                        <tr>
                        <td>M.A.P.S.K. Mudalnayaka - ( Grade 13-P )</td>
                        <td>R.M.P.B. Ranasinghe - (Grade 13-C)</td>
                        </tr>
                        <tr>
                        <td>A.N.N. Alvitigala - (Grade 13-F)</td>
                        <td>J.A.T.D. Gajaweera - (Grade 13-L)</td>
                        </tr>
                        <tr>
                        <td>W.N.B.S.Warnasooriya - (Grade 13-N)</td>
                        <td>W.I.A.P. Ihalagama - (Grade 13-J)</td>
                        </tr>
                        <tr>
                        <td>H.M.M.S. Herath (Grade 13-A)</td>
                        <td>P.M.M.M. Mapa (Grade 13-A)</td>
                        </tr>
                        <tr>
                        <td>H.M.D.M. Herath (Grade 13-A)</td>
                        <td>R.A.C.V. Ranasinghe (Grade 13-B)</td>
                        </tr>
                        <tr>
                        <td>J.B.S.S. Ranaweera (Grade 13-A)</td>
                        <td>W.A.L.S. Wicramaarachchi (Grade 13-B)</td>
                        </tr>
                        <tr>
                        <td>P.S.K. Pathirana (Grade 13-A)</td>
                        <td>D.N.U.K. Disanayaka (Grade 13-C)</td>
                        </tr>
                        <tr>
                        <td>H.M.S.D. Bandara (Grade 13-B)</td>
                        <td>H.A.P.U. Jayawardana (Grade 13-D)</td>
                        </tr>
                        <tr>
                        <td>S.M.S.D. Subasinghe (Grade 13-B)</td>
                        <td>R.M.D.G. Rathnayaka (Grade 13-D)</td>
                        </tr>
                        <tr>
                        <td>H.P.A.Y.S. Deshapriya (Grade 13-C)</td>
                        <td>P.P.H. Thathsarani (Grade 13-D)</td>
                        </tr>
                        <tr>
                        <td>H.P.Y.M. Gunawardhana (Grade 13-F)</td>
                        <td>D.M.J.A. Danathsuuriya (Grade 13-F)</td>
                        </tr>
                        <tr>
                        <td>B.H.D.T. Batuwita (Grade 13-M)</td>
                        <td>R.A.N. Dulanjalee (Grade 13-F)</td>
                        </tr>
                        <tr>
                        <td>H.A.R. Perera (Grade 13-N)</td>
                        <td>M.V. Sachinika (Grade 13-G)</td>
                        </tr>
                        <tr>
                        <td>P.D.C. Rathnasiri (Grade 13-N)</td>
                        <td>R.M.K.S. Rathnayake (Grade 13-G)</td>
                        </tr>
                        <tr>
                        <td>K.A.D.A. Bandara (Grade 13-P)</td>
                        <td>R.S.P.S.H. Chandrasekara (Grade 13-H)</td>
                        </tr>
                        <tr>
                        <td>B.K.K.N. Rudrigo (Grade 13-P)</td>
                        <td>M.I.U. Weerasekara (Grade 13-H)</td>
                        </tr>
                        <tr>
                        <td>R.N.T. Aththanayaka (Grade 13-P)</td>
                        <td>A.G.M.C.J. Amarasinghe (Grade 13-H)</td>
                        </tr>
                        <tr>
                        <td>J.A.B. Rathnasiri (Grade 13-P)</td>
                        <td>C.M. Kariyawasam (Grade 13-H)</td>
                        </tr>
                        <tr>
                        <td>P.M.C.M. Jayasuriya (Grade 13-N)</td>
                        <td>N.P.H.T. Karunarathna (Grade 13-K)</td>
                        </tr>
                        <tr>
                        <td>U.R.M.N. Wimalasiri (Grade 13-K)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>T.M.I.U. Thennakoon (Grade 13-K)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>A.A.K.N. Dasanayaka (Grade 13-K)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>H.P.R.D. Jayalath (Grade 13-M)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>J.H.M.C.K. Jayaweera (Grade 13-P)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>S.M.M.D. Serasinghe (Grade 13-Q)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>B.R. Balasooriya (Grade 13-Q)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>W.A.M.S. Wanasinghe (Grade 13-Q)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>M.D.C.M. Karunasekara (Grade 13-Q)</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>R.K.M.N.M. Samarajeewa (Grade 13-Q)</td>
                        <td></td>
                        </tr>
                        </tbody>
                    </table>


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