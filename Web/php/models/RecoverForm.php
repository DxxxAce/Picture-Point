<?php

namespace app\models;
use app\core\Application;
use app\core\Model;
class RecoverForm extends Model
{
    public string $email='';

    public function rules(): array
    {
        return [
            'email' =>[self::RULE_REQUIRED,self::RULE_EMAIL],
        ];
    }
    public function recover()
    {
        $user = (new User)->findOne(['email'=>$this->email]);
        if(!$user){
            $this->addError('email','User does not exist with this email.');
            return false;
        }

        return Application::$app->recover($user);
    }
}