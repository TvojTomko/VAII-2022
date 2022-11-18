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
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a3762f05b2.js" crossorigin="anonymous"></script>
    <script src="/public/js/script.js"></script>
    <style>
        body{
            font-family: "Raleway", sans-serif;
        }

        body, html {
            height: 100%;
            line-height: 1.8;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .center {
            margin: auto;
            width: 50%;
        }

        .center-text {
            text-align: center;
        }

        .footer-text {
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        .mygreen-bg {
            background-color: #00CC00;
        }

        .mygreen-text {
            color: #00CC00;
        }

        .mygrey-bg {
            background-color: #303030;
        }

        .mygrey-text {
            color: #303030;
        }

        .white-text {
            color: #FFFFFF;
        }

        .contactform {
            padding-left: 10%;
            padding-right: 10%;
        }

        .title {
            text-align: center;
            font-size: 30px;
            text-transform: uppercase;
            font-family: "Raleway", sans-serif;
        }

        .title-special {
            font-size: 30px;
            text-transform: uppercase;
            background-image: linear-gradient(
                    -225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%
            );
            background-size: auto auto;
            background-clip: border-box;
            color: #fff;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }

        .classic-text {
            font-size: 15px;
            color: #FFFFFF;
        }

        footer {
            padding: 30px;
        }

        .home-icon {
            padding-right: 10px;
        }

        .button-logo {
            background-color: #FFFFFF;
            border: none;
            padding: 10px 30px;
            text-align: center;
            font-size: 18px;
            margin: 5px 5px;
            transition: 0.4s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .button-logo:hover, .button-menu:hover {
            background-color: #303030;
            color: #00CC00;
        }

        .button-menu {
            background-color: #FFFFFF;
            border: none;
            padding: 10px 15px;
            margin: 5px 5px;
            text-align: center;
            font-size: 18px;
            transition: 0.4s;
            display: inline-block;
            text-decoration: none;
        }

        .button-footer:hover {
            border-style: solid;
            border-width: 2px;
            border-color: #00CC00;
        }

        .sm-opacity:hover {
            color: #00CC00;
            transition: 0.3s;
        }

        .register{
            padding-top: 25px;
            text-decoration: none;
        }

        .image {
            width: 100%;
        }

        .theme-image {
            max-width: 100%;
            height: auto;
        }

        .bar1 {
            width: 90%;
        }

        .bar2 {
            width: 85%;
        }

        .bar3{
            width: 75%;
        }

        .promo1 {
            padding:128px 16px;
        }

        .promo2 {
            color: #FFFFFF;
            padding: 20px;
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }

        .sectionpadding {
            padding-top: 100px;
        }

        .rows {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .columns {
            margin-bottom: 10px;
        }

        .labels {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="?c=Home" class="button-logo mygrey-text">LOGO will be here</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="?c=Home&a=about" class="button-menu mygrey-text"><i class="fa-solid fa-circle-info"></i> ABOUT</a>
            <a href="?c=Home&a=clubs" class="button-menu mygrey-text"><i class="fa-solid fa-paw"></i> CLUBS</a>
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
    <a href="Home/index.view.php" class="button-menu button-footer mygrey-text"><i class="fa-solid fa-house home-icon"></i>HOME</a>
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
    // Toggle between showing and hiding the sidebar when clicking the menu icon
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