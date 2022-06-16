<?php

namespace app\models;

use app\core\DbModel;
use app\core\Model;

class User extends DbModel
{
public string $username='';
public string $email='';
public string $pass='';
public string $confirmPass='';

    public function tableName():string
    {
        return 'users';
    }

    public function save()
    {
        $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);
        return parent::save();
    }
    public function rules(): array
    {
       return[
           'username'=> [self::RULE_REQUIRED],
           'email'=> [self::RULE_REQUIRED,self::RULE_EMAIL],
           'pass'=> [self::RULE_REQUIRED,[self::RULE_MIN,'min'=>8],[self::RULE_MAX,'max'=>24]],
           'confirmPass'=> [self::RULE_REQUIRED,[self::RULE_MATCH,'match'=>'pass']],
       ];
    }

    public function attributes(): array
    {
        return ['username',"email","pass"];
    }
}