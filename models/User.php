<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property integer $type
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'firstname', 'lastname', 'email', 'password'], 'required'],
            [['type'], 'integer'],
            [['user_id'], 'string', 'max' => 30],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 130]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'type' => 'Type',
        ];
    }
}
