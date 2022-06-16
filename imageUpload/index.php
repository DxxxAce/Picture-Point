<!DOCTYPE html>
<html>
<head>
    <title>Image thing</title>
</head>
<body>
<h1>Upload an image.</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="username" name="username">
    <button type="submit" name="submit">UPLOAD</button>

</form>
<div>
    <?php
    $username = "claudiu";
    echo $username;
    $dirname = 'uploads/'.$username;
    chdir($dirname);
    $files = glob("*.{jpg,jpeg,png}", GLOB_BRACE );
    chdir($dirname);
    foreach($files as $image) {
        ?> <img src="<?php echo $dirname. '/' . $image ?>" style="height: 200px; width: 200px;"/>
    <?php } ?>
</div>

</body>
</html>