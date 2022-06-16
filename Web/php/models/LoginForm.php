<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{
    public string $email;
    public string $pass;

    public function rules(): array
    {
        return [
            'email' =>[self::RULE_REQUIRED,self::RULE_EMAIL],
            'pass' =>[self::RULE_REQUIRED]
        ];
    }

    public function login()
    {
        $user = User::findOne(['email'=>$this->email]);
        if(!$user){
            $this->addError('email','User does not exist with this email.');
            return false;
        }
        if(!password_verify($this->pass,$user->pass)){
            $this->addError('pass','Password is incorrect.');
            return false;
        }

        return Application::$app->login($user);
    }
}