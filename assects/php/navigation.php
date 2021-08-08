
<nav>

<!--Navigation Bar එකේ වම් පැත්ත-->

<div class="nav-left">
    <a href="index.php"><img src="images/logo.png" class="logo"></a>
    <div class="nav-icons">
    <ul>
        <li class="link link-two shrink-on-hover">						
            <img src="images/notification.png">					
        </li>
        <li class="link link-two shrink-on-hover">
            <img src="images/inbox.png">
        </li>
        <li class="link link-two shrink-on-hover">
            <img src="images/video.png">
        </li>
    </ul></div>

</div>

<!--Navigation Bar එකේ දකුණු පැත්ත-->

<div class="nav-right">
    <div class="search-box">
        <img src="images/search.png">
        <input type="text" placeholder="Search">
    </div>

<!---MObile Navigation Menu එක-->

    <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mobile-nav"><img src="images/nav-menu.png" alt=""></span>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">					  
          <a href="dekma.php">Our Vision</a>
          <a href="principal.php">Principal</a>
          <a href="prefect.php">Prefect Board</a>
          <a href="coming.php">Our Journey</a>
          <a href="comming.php">Past Pupils Association</a>
          <a href="about.php">About Us</a>
          <a href="contact.php">Contact Us</a>
        </div>
      </div>


      <!---Profile Picture එක-->

    <div class="nav-user-icon online" onclick="settingsMenuToggle();">
        <img src="images/profile-pic.png">
    </div>
    <div class="mobile-container">
</div>

<!--User Settings Menu එක-->

<div class="settings-menu">
    <div id="dark-btn">
        <span></span>
    </div>
    <div class="settings-menu-inner">
        <div class="user-profile">
            <img src="images/profile-pic.png">
            <div>
                <p>Mayurapada Central College</p>
                <a href="#">See Your Profile</a>
            </div>
        </div>
        <hr>
        <div class="user-profile">
            <img src="images/feedback.png">
            <div>
                <p>Give Feedback</p>
                <a href="#">Share Your Ideas With us</a>
            </div>
        </div>
        <hr>

        <div class="settings-links">
            <img src="images/setting.png" class="settings-icon">
            <a href="#">Settings & Privacy</a>
            <img src="images/arrow.png" width="10px">
        </div>
        <div class="settings-links">
            <img src="images/help.png" class="settings-icon">
            <a href="#">Help & Support</a>
            <img src="images/arrow.png" width="10px">
        </div>
        <div class="settings-links">
            <img src="images/display.png" class="settings-icon">
            <a href="#">Display & Accessibility</a>
            <img src="images/arrow.png" width="10px">
        </div>
        <div class="settings-links">
            <img src="images/logout.png" class="settings-icon">
            <a href="#">Logout</a>
            <img src="images/arrow.png" width="10px">
        </div>
    </div>
</div>
</nav>
