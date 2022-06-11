<?php

use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$app = new Application();
$app->router->get('/Web-Project/Web/php/public/index.php/home','home');
$app->router->get('/Web-Project/Web/php/public/index.php/contact','contact');
$app->run();