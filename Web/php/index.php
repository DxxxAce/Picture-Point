<?php

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';
$app = new Application();
$app->router->get('/Web-Project/Web/php/index.php',function(){
  include '../html/';
});
$app->router->get('/Web-Project/Web/php/index.php/contact',function (){
    return 'Contact';
});
$app->run();