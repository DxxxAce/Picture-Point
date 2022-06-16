<?php
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Gallery</title>

        <link rel="icon" type="image/x-icon" href="../media/Logos/final/pptext.svg"/>
        <link rel="stylesheet" href="../../css/gallery.css"/>
        <link rel="stylesheet" href="../../css/navbar.css"/>

        <meta charset="UTF-8" />
        <meta name="author" content="Palie Razvan" />
        <meta name="description" content="Gallery Page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

        <script>
            function fullwindowpopup(){
            window.open("home.php","bfs","fullscreen,scrollbars")
        }
    </script>

    <body>
        <div id="container">
            <nav id="menubar">
                <div id="dropdown" class="button">
                    <button id="dropbtn">
                        <img id="menu-icon" src="../../media/in-page-images/dropdown.svg" alt="Menu">
                    </button>

                    <div id="dropdown-content">
                        <a href="/Web-Project/Web/php/public/index.php">Home</a>

                        <?php if(\app\core\Application::isGuest()):
                            echo '<a href="/Web-Project/Web/php/public/index.php/login">Connect</a>';
                        else:
                            echo '<a href="/Web-Project/Web/php/public/index.php/logout">Logout</a>';
                        endif;
                        ?>

                        <a href="/Web-Project/Web/php/public/index.php/gallery">Gallery</a>

                        <a href="/Web-Project/Web/php/public/index.php/settings">Settings</a>

                        <a href="/Web-Project/Web/php/public/index.php/information">About</a>
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
                    <?php if(\app\core\Application::isGuest()):
                        echo '<div id="login" class="button">
                <a href="/Web-Project/Web/php/public/index.php/login">
                    <img class="bicon" src="../media/in-page-images/login.svg" alt="Login">
                </a>
            </div>';
                    else: echo '<div id="login" class="button">
                <a href="/Web-Project/Web/php/public/index.php/logout >
                    <img class="bicon" src="../../media/in-page-images/logout.svg" alt="Logout">
                </a>
                </div>';
                    endif;
                    ?>

                    <div class="main-empty"></div>

                    <div id="home" class="button">
                        <a href="/Web-Project/Web/php/public/index.php">
                            <img class="bicon" src="../../media/in-page-images/home.svg" alt="Home">
                        </a>
                    </div>

                    <div class="main-empty"></div>

                    <div id="gallery" class="button">
                        <a href="/Web-Project/Web/php/public/index.php/gallery">
                            <img class="bicon" src="../../media/in-page-images/gallery.svg" alt="Gallery">
                        </a>
                    </div>

                    <div class="main-empty"></div>

                    <div id="settings" class="button">
                        <a href="/Web-Project/Web/php/public/index.php/settings">
                            <img class="bicon" src="../../media/in-page-images/settings.svg" alt="Settings">
                        </a>
                    </div>
                </div>

                <div class="empty"></div>

                <div id="info" class="button">
                    <a href="/Web-Project/Web/php/public/index.php/information">
                        <img class="bicon" src="../../media/in-page-images/info.svg" alt="About">
                    </a>
                </div>
            </nav>

            <div id="main">
                <div id="title">
                    <p>Your Library</p>
                </div>

                <div id="button-container">
                    <button class="query" id="selectAll" >
                        <p>All Pictures</p>
                    </button>

                    <button class="query" id="selectFromTwitter">
                        <p>From Twitter</p>
                    </button>

                    <button class="query" id="selectFromUnsplash">
                        <p>From Unsplash</p>
                    </button>

                    <button id="upload" >
                        <p>Upload Picture</p>
                    </button>
                </div>

                <div id="image-container">
                   <?php

                   ?>
                </div>
            </div>
        </div>
    </body>
</html>
