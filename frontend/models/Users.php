<?php

namespace app\models;

use Yii;

class Users extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['name', 'mobile', 'password'], 'required'],
            [['name'], 'string', 'max' => 56],
            [['email'], 'string', 'max' => 128],
            [['mobile'], 'string', 'max' => 11],
            [['password'], 'string', 'max' => 40],
            [['mobile'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'password' => 'Password',
        ];
    }
}
