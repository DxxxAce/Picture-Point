<?php
namespace app\core;
class Config
{
    public array $config = [
        'userClass' => \app\models\User::class,
        'db' =>["dsn" => "mysql:host=localhost;port=3306;dbname=pales;charset=utf8",
        "user" => "pales",
        "pass" => "4563"]
    ];
}