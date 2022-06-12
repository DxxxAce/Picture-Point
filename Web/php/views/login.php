<?php
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Login</title>

    <link rel="icon" type="image/x-icon" href="../media/Logos/final/pptext.svg">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/navbar.css">

    <meta charset="UTF-8">
    <meta name="author" content="Hirtopanu Alin">
    <meta name="description" content="Login Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div id="container">
    <nav id="menubar">
        <div id="dropdown" class="button">
            <button id="dropbtn">
                <img id="menu-icon" src="../../media/in-page-images/dropdown.svg" alt="Menu">
            </button>

            <div id="dropdown-content">
                <a href="/Web-Project/Web/php/public/index.php">Home</a>
                <a href="/Web-Project/Web/php/public/index.php/login">Connect</a>
                <a href="settings.html">Settings</a>
                <a href="information.html">About</a>
            </div>
        </div>

        <div id="empty"></div>

        <div id="logo" class="button">
            <a href="/Web-Project/Web/php/public/index.php">
                <img id="logo-icon" class="bicon" src="../../media/Logos/final/pptext.svg" alt="Logo">
            </a>
        </div>

        <div class="empty"></div>

        <div id="main-buttons">
            <div id="login" class="button">
                <a href="/Web-Project/Web/php/public/index.php/login">
                    <img class="bicon" src="../../media/in-page-images/login.svg" alt="Login">
                </a>
            </div>

            <div class="main-empty"></div>

            <div id="home" class="button">
                <a href="/Web-Project/Web/php/public/index.php">
                    <img class="bicon" src="../../media/in-page-images/home.svg" alt="Home">
                </a>
            </div>

            <div class="main-empty"></div>

            <div id="settings" class="button">
                <a href="settings.html">
                    <img class="bicon" src="../../media/in-page-images/settings.svg" alt="Settings">
                </a>
            </div>
        </div>

        <div class="empty"></div>

        <div id="info" class="button">
            <a href="information.html">
                <img class="bicon" src="../../media/in-page-images/info.svg" alt="About">
            </a>
        </div>
    </nav>

    <div id="main">
        <div class="row"></div>

        <div id="mid">
            <div class="column"></div>

            <div id="square">
                <div id="form">
                    <div id="prompt">
                        <img id="user-icon" src="../../media/in-page-images/user.svg" alt="Icon">
                        <h2>Connect now:</h2>
                    </div>

                    <form action="" method="">
                        <div id="text-input">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                        </div>

                        <div id="checkbox">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>

                        <input type="submit" value="Login">
                    </form>

                    <div id="links">
                        <a class="link" href="recover.html">Forgot your password?</a>
                        <a class="link" href="/Web-Project/Web/php/public/index.php/register">Not registered yet?</a>
                    </div>
                </div>
            </div>

            <div class="column"></div>
        </div>

        <div class="row"></div>
    </div>
</div>
</body>
</html>