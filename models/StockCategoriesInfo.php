<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock_categories_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $text
 *
 * @property StockCategories $record
 */
class StockCategoriesInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_categories_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 250],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => StockCategories::className(), 'targetAttribute' => ['record_id' => 'id']],
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
            'name' => Yii::t('app', 'Name'),
            'text' => Yii::t('app', 'Text'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(StockCategories::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\StockCategoriesInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StockCategoriesInfo(get_called_class());
    }
}
