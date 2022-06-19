<?php

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
use app\core\Config;
require_once __DIR__ . '/../vendor/autoload.php';
$config = new Config();
$app = new Application(dirname(__DIR__),$config->config);

$app->router->get('/Web-Project/Web/php/public/index.php',[SiteController::class,'home']);
$app->router->get('/Web-Project/Web/php/public/index.php/information',[SiteController::class,'contact']);
$app->router->post('/Web-Project/Web/php/public/index.php/information',[SiteController::class,'handleContact']);

$app->router->get('/Web-Project/Web/php/public/index.php/logout',[AuthController::class,'logout']);

$app->router->get('/Web-Project/Web/php/public/index.php/login',[AuthController::class,'login']);
$app->router->post('/Web-Project/Web/php/public/index.php/login',[AuthController::class,'login']);

$app->router->get('/Web-Project/Web/php/public/index.php/register',[AuthController::class,'register']);
$app->router->post('/Web-Project/Web/php/public/index.php/register',[AuthController::class,'register']);

$app->router->get('/Web-Project/Web/php/public/index.php/gallery',[SiteController::class,'gallery']);

$app->router->post('/Web-Project/Web/php/public/index.php/recover',[AuthController::class,'recover']);
$app->router->get('/Web-Project/Web/php/public/index.php/recover',[AuthController::class,'recover']);

$app->router->post('/Web-Project/Web/php/public/index.php/settings',[SiteController::class,'settings']);
$app->router->get('/Web-Project/Web/php/public/index.php/settings',[SiteController::class,'settings']);

$app->router->post('/Web-Project/Web/php/public/Upload.php',[SiteController::class,'upload']);

$app->run();