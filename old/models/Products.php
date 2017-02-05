<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $alias
 * @property double $product_id
 * @property double $price
 * @property double $discount_price
 * @property integer $brand_id
 * @property integer $parent_id
 * @property integer $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property ProductsInfo[] $productsInfos
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'product_id', 'price', 'discount_price', 'parent_id', 'brand_id', 'sort', 'creation_time', 'update_time'], 'required'],
            [['product_id', 'price', 'discount_price'], 'number'],
            [['parent_id', 'brand_id', 'sort'], 'integer'],
            [['alias', 'creation_time', 'update_time'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alias' => Yii::t('app', 'Alias (заповнювати не обов`язково)'),
            'product_id' => Yii::t('app', 'Идентификатор товара'),
            'price' => Yii::t('app', 'Цена'),
            'discount_price' => Yii::t('app', 'Цена со скидкой'),
            'parent_id' => Yii::t('app', 'Принадлежит категории'),
            'sort' => Yii::t('app', 'SORT'),
            'creation_time' => Yii::t('app', 'Date of creation'),
            'update_time' => Yii::t('app', 'Date of update'),
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
        return $this->hasOne(ProductsInfo::className(), ['record_id' => 'id'])->where([ProductsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    public function getInfoName()
    {
        return $this->hasOne(ProductsInfo::className(), ['record_id' => 'id'])->where([ProductsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }
    
    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['id' => 'brand_id']);
    }
    
    public function getCalculate()
    {
        return $this->hasOne(Calculator::className(), ['product_id' => 'id']);
    }
    
    public function getTaggedProducts()
    {
        return $this->hasOne(TagsAssoc::className(), ['record_id' => 'id'])->where([TagsAssoc::tableName().'.table_name' => Products::tableName()]);
    }
    
    public function getProductTags()
    {
        return $this->hasMany(TagsAssoc::className(), ['record_id' => 'id'])->where([TagsAssoc::tableName().'.table_name' => Products::tableName()]);
    }
    
    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
                ->via('productTags');
    }
    
    public function getSame1()
    {
        return $this->hasOne(self::className(), ['id' => 'same1_id']);
    }
    
    public function getSame2()
    {
        return $this->hasOne(self::className(), ['id' => 'same2_id']);
    }
    
    public function getSame3()
    {
        return $this->hasOne(self::className(), ['id' => 'same3_id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\Queries\Products the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Products(get_called_class());
    }

    /**
     * Create product url
     */    
    public function getUrlCosmetic()
    {
        return Url::to(["/cosmetic/{$this->alias}/p{$this->id}"]);
    }
    
    public function getEquipmentUrl()
    {   
        if (Yii::$app->equipmentCatalog->category) {
            $categoryAlias = Yii::$app->equipmentCatalog->category->alias;
        } else {
            if ($this->category->parent->alias != 'equipment') {
                $categoryAlias = $this->category->parent->alias;
            } else {
                $categoryAlias = $this->category->alias;
            }
        }
        
        return Url::to(["/equipment/{$categoryAlias}/{$this->alias}/p{$this->id}"]);
    }
    
    public function getCalculatorUrl()
    {
        return Url::to(["/calculator/equipment/p{$this->id}"]);
    }
    
    public function getSearchUrl()
    {
        if ($this->category->parent->alias == 'cosmetic') {
            return Url::to(["/cosmetic/{$this->alias}/p{$this->id}"]);
        } else {
            if ($this->category->parent->alias != 'equipment') {
                $categoryAlias = $this->category->parent->alias;
            } else {
                $categoryAlias = $this->category->alias;
            }
            return Url::to(["/equipment/{$categoryAlias}/{$this->alias}/p{$this->id}"]);
        }
    }
}
