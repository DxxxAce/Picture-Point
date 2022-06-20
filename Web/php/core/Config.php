<?php
namespace app\core;
class Config
{
    public array $config = [
        'userClass' => \app\models\User::class,
        'db' =>["dsn" => "mysql:host=localhost;port=3306;dbname=tudor;charset=utf8",
        "user" => "tudor",
        "pass" => "1234"]
    ];
}