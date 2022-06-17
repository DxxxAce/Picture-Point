<?php
/** @var $model \app\models\User*/

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Register</title>

    <link rel="icon" type="image/x-icon" href="../media/Logos/final/pptext.svg">
    <link rel="stylesheet" href="../../css/register.css">
    <link rel="stylesheet" href="../../css/navbar.css">

    <meta charset="UTF-8">
    <meta name="author" content="Hirtopanu Alin">
    <meta name="description" content="Register Page">
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
        <div class="row"></div>

        <div id="mid">
            <div class="column"></div>

            <div id="form">
                <div id="prompt">
                    <img id="user-icon" src="../../media/in-page-images/user.svg" alt="User">
                    <h2>Sign up now:</h2>
                </div>

                <?php  $form=\app\core\form\Form::begin('',"post") ?>
                <div id="text-input">
                    <?php echo $form->field($model,'username')?>
                    <?php echo $form->field($model,'email')?>
                    <?php echo $form->field($model,'pass')?>
                    <?php echo $form->field($model,'confirmPass')?>
                <input type="submit" value="Register">
                    <div class="invalid-feedback">
                        <?php if(strcmp($model->getFirstError('username'),'')!=0)
                                echo $model->getFirstError('username').PHP_EOL ?>
                        <?php if(strcmp($model->getFirstError('email'),'')!=0)
                                echo 'Email:'.$model->getFirstError('email').PHP_EOL ?>
                        <?php if(strcmp($model->getFirstError('pass'),'')!=0)
                                echo 'Password:'.$model->getFirstError('pass').PHP_EOL ?>
                        <?php  if(strcmp($model->getFirstError('confirmPass'),'')!=0)
                        echo 'Password:'.$model->getFirstError('confirmPass').PHP_EOL ?>
                    </div>
                </div>
                <?php \app\core\form\Form::end() ?>

                <a id="link" href="/Web-Project/Web/php/public/index.php/login">Back</a>
            </div>

            <div class="column"></div>
        </div>


        <div class="row"></div>
    </div>
</div>
</body>
</html>
