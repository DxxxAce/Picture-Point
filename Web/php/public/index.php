<?php

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$app = new Application(dirname(__DIR__));
$app->router->get('/Web-Project/Web/php/public/index.php',[SiteController::class,'home']);
$app->router->get('/Web-Project/Web/php/public/index.php/information',[SiteController::class,'contact']);
$app->router->post('/Web-Project/Web/php/public/index.php/information',[SiteController::class,'handleContact']);

$app->router->get('/Web-Project/Web/php/public/index.php/login',[AuthController::class,'login']);
$app->router->post('/Web-Project/Web/php/public/index.php/login',[AuthController::class,'login']);
$app->router->get('/Web-Project/Web/php/public/index.php/register',[AuthController::class,'register']);
$app->router->post('/Web-Project/Web/php/public/index.php/register',[AuthController::class,'register']);
$app->run();