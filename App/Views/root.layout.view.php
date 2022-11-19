<?php
/** @var string $contentHTML */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>checkpoint2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/checkpoint2/public/css/style.css">
    <script src="https://kit.fontawesome.com/a3762f05b2.js" crossorigin="anonymous"></script>
    <script src="/checkpoint2/public/js/script.js"></script>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="menu">
        <a href="?c=Home" class="button-logo mygrey-text">LOGO will be here</a>
        <!-- Right-sided navbar links -->
        <div class="right w3-hide-small">
            <a href="?c=Home&a=about" class="button-menu mygrey-text"><i class="fa-solid fa-circle-info"></i> ABOUT</a>
            <a href="?c=Home&a=clubs" class="button-menu mygrey-text"><i class="fa-solid fa-dog"></i> CLUBS</a>
            <a href="?c=Home&a=contact" class="button-menu mygrey-text"><i class="fa-solid fa-address-card"></i> CONTACT</a>
            <a href="?c=Auth&a=login" class="button-menu mygrey-text"><i class="fa-sharp fa-solid fa-key"></i> LOGIN</a>
        </div>

        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Mobile menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="Home/about.view.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-circle-info"></i> ABOUT</a>
    <a href="Home/clubs.view.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-paw"></i> CLUBS</a>
    <a href="Home/contact.view.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-address-card"></i> CONTACT</a>
    <a href="Auth/login.view.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-key"></i> LOGIN</a>
</nav>

<div class="">
        <?= $contentHTML ?>
</div>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="classic-text center-text mygrey-bg">
    <a href="Home/index.view.php" class="button-footer mygrey-text"><i class="fa-solid fa-house home-icon"></i>HOME</a>
    <div class="w3-xlarge w3-section">
        <p class="footer-text">Created by Tomas Sobek</p>
        <i class="fa fa-facebook-official sm-opacity"></i>
        <i class="fa fa-instagram sm-opacity"></i>
        <i class="fa fa-snapchat sm-opacity"></i>
        <i class="fa fa-pinterest-p sm-opacity"></i>
        <i class="fa fa-twitter sm-opacity"></i>
        <i class="fa-brands fa-tiktok sm-opacity"></i>
    </div>
</footer>

<script>
    var mySidebar = document.getElementById("mySidebar");
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }
    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>
</body>
</html>