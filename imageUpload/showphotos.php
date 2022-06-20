<?php
$userunsp = $_COOKIE['unspuser'];
$dirname = "uploads/".$userunsp."/";
chdir($dirname);
$files = glob("*.png");
foreach($files as $image) {
    ?> <img src="<?php echo $dirname. '/' . $image ?>"/>
<?php }
?>