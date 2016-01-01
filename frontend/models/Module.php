<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property integer $created_by
 *
 * @property User $createdBy
 * @property Year $year0
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'year', 'created_by'], 'required'],
            [['year', 'created_by'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'year' => 'Year',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYear0()
    {
        return $this->hasOne(Year::className(), ['id' => 'year']);
    }
}
