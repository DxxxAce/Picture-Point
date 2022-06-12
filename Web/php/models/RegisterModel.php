<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
public string $username;
public string $email;
public string $pass;
public string $confirmPass;

    public function rules(): array
    {
       return[
           'username'=> [self::RULE_REQUIRED],
           'email'=> [self::RULE_REQUIRED,self::RULE_EMAIL],
           'pass'=> [self::RULE_REQUIRED,[self::RULE_MIN,'min'=>8],[self::RULE_MAX,'max'=>24]],
           'confirmPass'=> [self::RULE_REQUIRED,[self::RULE_MATCH,'match'=>'pass']],
       ];
    }

    public function register()
    {
        echo "Creating new user";
    }
}