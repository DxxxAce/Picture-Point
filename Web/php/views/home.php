<?php
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Home</title>

    <link rel="icon" type="image/x-icon" href="../media/Logos/final/pptext.svg"/>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/navbar.css"/>

    <meta charset="UTF-8"/>
    <meta name="author" content="Claudiu Strimbei"/>
    <meta name="description" content="Home Page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div id="container">
    <nav id="menubar">
        <div id="dropdown" class="button">
            <button id="dropbtn">
                <img id="menu-icon" src="../media/in-page-images/dropdown.svg" alt="Menu">
            </button>

            <div id="dropdown-content">
                <a href="/Web-Project/Web/php/public/index.php">Home</a>
                <a href="/Web-Project/Web/php/public/index.php/login">Connect</a>
                <a href="settings.html">Settings</a>
                <a href="/Web-Project/Web/php/public/index.php/information">About</a>
            </div>
        </div>

        <div id="empty"></div>

        <div id="logo" class="button">
            <a href="/Web-Project/Web/php/public/index.php">
                <img id="logo-icon" class="bicon" src="../media/Logos/final/pptext.svg" alt="Logo">
            </a>
        </div>

        <div class="empty"></div>

        <div id="main-buttons">
            <div id="login" class="button">
                <a href="/Web-Project/Web/php/public/index.php/login">
                    <img class="bicon" src="../media/in-page-images/login.svg" alt="Login">
                </a>
            </div>

            <div class="main-empty"></div>

            <div id="home" class="button">
                <a href="index.html">
                    <img class="bicon" src="../media/in-page-images/home.svg" alt="Home">
                </a>
            </div>

            <div class="main-empty"></div>

            <div id="settings" class="button">
                <a href="settings.html">
                    <img class="bicon" src="../media/in-page-images/settings.svg" alt="Settings">
                </a>
            </div>
        </div>

        <div class="empty"></div>

        <div id="info" class="button">
            <a href="/Web-Project/Web/php/public/index.php/information">
                <img class="bicon" src="../media/in-page-images/info.svg" alt="About">
            </a>
        </div>
    </nav>

    <div id="main">
        <div id="text-container">
            <div id="title">
                <p>Welcome to Picture Point!</p>
            </div>

            <div class="text">
                <p>Are you tired of searching on various media platforms whenever you want to see one of your pictures?</p>

                <p>Do you have to keep track of too many social accounts to see your image stats?</p>

                <p>Then this is where our app comes in to help you!</p>
            </div>

            <a class="text-button" href="/Web-Project/Web/php/public/index.php/login">
                <p>Get Started</p>
            </a>

            <div class="text">
                <p>With Picture Point, you can gather all of your photos in one place.</p>

                <p>
                    Connect to some of your favorite social media platforms and import all of your pictures,
                    or upload them directly from your device.
                </p>

                <p>View, download, edit and check the stats of your posted photos in real time.</p>
            </div>

            <a class="text-button" href="/Web-Project/Web/php/public/index.php/information">
                <p>Learn More</p>
            </a>
        </div>
    </div>
</div>
</body>
</html>