<?php
;
use app\core\Application;
use app\core\Unsplash;
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Gallery</title>

        <link rel="icon" type="image/x-icon" href="../../media/Logos/final/pptext.svg"/>
        <link rel="stylesheet" href="../../css/gallery.css"/>
        <link rel="stylesheet" href="../../css/navbar.css"/>

        <meta charset="UTF-8" />
        <script src="../jsscripts/openForm.js"></script>
        <meta name="author" content="Palie Razvan" />
        <meta name="description" content="Gallery Page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <?php if(\app\core\Application::isGuest()):
                    echo '<a href="/Web-Project/Web/php/public/index.php/login">Login</a>';
                else:
                    echo '<a href="/Web-Project/Web/php/public/index.php/logout">Logout</a>';
                    echo '<a href="/Web-Project/Web/php/public/index.php/gallery">Gallery</a>';
                endif;
                ?>
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
                    <img class="bicon" src="../../media/in-page-images/login.svg" alt="Login">
                </a>
            </div>';
            else: echo '<div id="login" class="button">
                <a href="/Web-Project/Web/php/public/index.php/logout">
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

            <?php if(\app\core\Application::isGuest()):
                echo '<div id="gallery" class="button">
                <a href="/Web-Project/Web/php/public/index.php/login">
                    <img class="bicon" src="../../media/in-page-images/gallery.svg" alt="Gallery">
                </a>
            </div>';
            else: echo '<div id="gallery" class="button">
            <a href="/Web-Project/Web/php/public/index.php/gallery">
                <img class="bicon" src="../../media/in-page-images/gallery.svg" alt="Gallery">
            </a>
        </div>';
            endif;
            ?>

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
                <?php if(Application::$app->session->getFlash('error'))
                    echo "<p>".Application::$app->session->getFlash('error')."</p>"
                ?>
                <div id="button-container">
                    <button class="query" id="selectAll">
                        <p>All Pictures</p>
                    </button>

                    <button class="query" id="selectFromTwitter" onclick="openForm('twitterForm')">
                        <p>From Twitter</p>
                    </button>

                    <button class="query" id="selectFromUnsplash" onclick="openForm('unspForm')">
                        <p>From Unsplash</p>
                    </button>

                    <button id="upload" onload="closeForm()" onclick="openForm('popup-form')">
                        <p>Upload Picture</p>
                    </button>
                </div>

                <div class="form-popup" id="popup-form">
                    <form action="../../../../imageUpload/upload.php" method="post" class="form-container" enctype="multipart/form-data">
                        <h1>Upload</h1>

                        <input type="file" name="file">
                        <input type="username" name="username">
                        <button type="submit" name="submit">UPLOAD</button>

                        <button type="button" class="btn cancel" onclick="closeForm('popUPForm')">Close</button>
                    </form>
                </div>

                    <div class="form-popup" id="unspForm">
                        <form action="../../../../imageUpload/Unsplash.php" method="post" class="form-container" enctype="multipart/form-data">
                            <h1>Unsplash connect</h1>
                            <input type="unspUsername" name="unspUsername" placeholder="Unsplash username">
                            <button type="connectUnsplash" name="connectUnsplash">Log in and download pictures</button>
                            <button type="button" class="btn cancel" onclick="closeForm('unspForm')">Close</button>
                            <?php
                            ?>
                        </form>
                    </div>

                    <div class="form-popup" id="twitterForm">
                        <form action="../../../../imageUpload/downloadTwitter.php" method="post" class="form-container" enctype="multipart/form-data">
                            <h1>Twitter connect</h1>
                            <input type="twitterUser" name="twitterUser" placeholder="Twitter username">
                            <input type="twitterPass" name="twitterPass" placeholder="Twitter password">
                            <button type="connectTwitter" name="connectTwitter">Log in and download pictures</button>
                            <button type="button" class="btn cancel" onclick="closeForm('twitterForm')">Close</button>
                        </form>
                </div>

            <div id="image-container">
                <?php
                    $username = $_COOKIE['unspuser'];

                    $dir_path = "../views/unsphotos/".$username.'/';
                    $final_path = "../".$dir_path;
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];

                                // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                    // show image
                                    echo "<img class='img' src='$final_path$files[$i]' alt='Image'>";
                                }
                            }
                        }
                    }
                ?>
            </div>

            <div id="myModal" class="modal">

                    <span class="close">&times;</span>

                    <form id="settings-container">
                        <input type="submit" id="save" value="Save">

                        <div class="filter">
                            <input type="range" name="brightness" id="brightness" min="0" max="100" value="0" step="0.1">
                            <label for="brightness">Brightness</label>
                        </div>
                        
                        <div class="filter">
                            <input type="range" name="contrast" id="contrast" min="0" max="100" value="0" step="0.1">
                            <label for="contrast">Contrast</label>
                        </div>

                        <div class="filter">
                            <input type="range" name="saturation" id="saturation" min="0" max="100" value="0" step="0.1">
                            <label for="saturation">Saturation</label>
                        </div>

                        <div class="filter">
                            <input type="range" name="gray" id="gray" min="0" max="100" value="0" step="0.1">
                            <label for="gray">Grayscale</label>
                        </div>

                        <div class="filter">
                            <input type="range" name="blur" id="blur" min="0" max="100" value="0" step="0.1">
                            <label for="blur">Blur</label>
                        </div>

                        <div class="filter">
                            <input type="range" name="opacity" id="opacity" min="0" max="100" value="0" step="0.1">
                            <label for="opacity">Opacity</label>
                        </div>

                        <div class="filter">
                            <input type="range" name="sepia" id="sepia" min="0" max="100" value="0" step="0.1">
                            <label for="sepia">Sepia</label>
                        </div>
                    </form>

                    <div id="canvas">
                        <img class="modal-content" id="img01">

                        <div id="caption"></div>
                    </div>
                </div>

                <script>
                    function openForm(string) {
                        document.getElementById(string.toString()).style.display = "block";
                    }

                    function closeForm(string) {
                        document.getElementById(string.toString()).style.display = "none";
                    }

                    var modal = document.getElementById("myModal");

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementsByClassName("img");
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");

                    for (let i = 0; i < img.length; i++) {
                            img[i].onclick = function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }
                    }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                </script>
        </div>
    </body>
</html>
