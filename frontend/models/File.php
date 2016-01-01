<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property integer $user
 * @property integer $module
 *
 * @property Module $module0
 * @property User $user0
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'path', 'user', 'module'], 'required'],
            [['user', 'module'], 'integer'],
            [['file'], 'file'],
            [['name'], 'string', 'max' => 50],
            [['path'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'module' => 'Module',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule0()
    {
        return $this->hasOne(Module::className(), ['id' => 'module']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }
}
