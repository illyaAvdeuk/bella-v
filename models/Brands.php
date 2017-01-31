<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "brands".
 *
 * @property integer $id
 * @property string $alias
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property BrandsInfo[] $brandsInfos
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'sort', 'creation_time', 'update_time'], 'required'],
            [['sort', 'creation_time', 'update_time'], 'integer'],
            [['alias'], 'string', 'max' => 250],
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
        return $this->hasOne(BrandsInfo::className(), ['record_id' => 'id'])->where([BrandsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['brand_id' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssetProduct()
    {
        return $this->hasOne(Products::className(), ['brand_id' => 'id'])
            ->joinWith('category.parent c');
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\Brands the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Brands(get_called_class());
    }
    
    public function getUrl()
    {
        return Url::to(["/brands/{$this->alias}"]);
    }
    
    public function getUrlCosmetic()
    {
        return Url::to(["/cosmetic/{$this->alias}/b{$this->id}"]);
    }
    
    public function getEquipmentUrl()
    {   
        return Url::to(["/equipment/{$this->alias}/b{$this->id}"]);
    }
    
    public function getEquipmentCategoryUrl()
    {   
        $categoryAlias = Yii::$app->equipmentCatalog->category->alias;
        return Url::to(["/equipment/$categoryAlias/{$this->alias}/b{$this->id}"]);
    }
    
    public function getHomeUrl()
    {
        if (isset($this->issetProduct->category->parent->alias) 
                && $this->issetProduct->category->parent->alias  == 'cosmetics') {
            return Url::to(["/cosmetic/{$this->alias}/b{$this->id}"]);
        } else {
            return Url::to(["/equipment/{$this->alias}/b{$this->id}"]);
        }
    }
}
