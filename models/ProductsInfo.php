<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $text
 *
 * @property Products $record
 */
class ProductsInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name', 'text'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => Yii::t('app', 'Record ID'),
            'lang' => Yii::t('app', 'Lang'),
            'name' => Yii::t('app', 'Название'),
            'text' => Yii::t('app', 'Описание'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Products::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\ProductsInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\ProductsInfo(get_called_class());
    }
}
