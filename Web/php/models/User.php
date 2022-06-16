<?php

namespace app\models;

use app\core\DbModel;
use app\core\Model;

class User extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED= 2;

    public string $username='';
    public string $email='';
    public string $pass='';
    public int $status = self::STATUS_INACTIVE;
    public string $confirmPass='';

    public function tableName():string
    {
        return 'users';
    }

    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);
        return parent::save();
    }
    public function rules(): array
    {
       return[
           'username'=> [self::RULE_REQUIRED],
           'email'=> [self::RULE_REQUIRED,self::RULE_EMAIL, [
               self::RULE_UNIQUE,'class' =>self::class
               ]],
           'pass'=> [self::RULE_REQUIRED,[self::RULE_MIN,'min'=>8],[self::RULE_MAX,'max'=>24]],
           'confirmPass'=> [self::RULE_REQUIRED,[self::RULE_MATCH,'match'=>'pass']],
       ];
    }

    public function attributes(): array
    {
        return ['username',"email","pass","status"];
    }

    public function primaryKey(): string
    {
        return 'id';
    }
}