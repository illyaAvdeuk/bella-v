<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stocks".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property integer $product_id
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property StocksInfo[] $stocksInfos
 */
class Stocks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stocks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort', 'status'], 'integer'],
            [['pub_date'], 'safe'],
            [['alias', 'creation_time', 'update_time'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alias' => Yii::t('app', 'Alias'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    public function behaviors()
    {
        return [
            'Thumb' => \app\behaviors\ThumbBehavior::className()
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(StocksInfo::className(), ['record_id' => 'id'])
                ->where([StocksInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    public function getCategory()
    {
        return $this->hasOne(StockCategories::className(), ['id' => 'parent_id']);
    }
    
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
    
    /**
     * Get attached files
     */
    public function getAttachedFiles()
    {
        return $this->hasMany(Files::className(), ['record_id' => 'id'])
                ->where([Files::tableName().'.table_name' => self::tableName()])
                ->orderBy('sort DESC');
    }
    
    public function getUrl()
    {
        return \yii\helpers\Url::to(["/stocks/{$this->category->alias}/{$this->alias}"]);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\Stocks the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Stocks(get_called_class());
    }
}
