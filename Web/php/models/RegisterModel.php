<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
public string $username;
public string $email;
public string $pass;
public string $confirmPass;

    public function register()
    {
        echo "Creating new user";
    }
}