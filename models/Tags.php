<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
/**
 * This is the model class for table "tags".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property TagsAssoc[] $tagsAssocs
 * @property TagsInfo[] $tagsInfos
 */
class Tags extends \yii\db\ActiveRecord
{
    public $isAvailable = true;
    public $isSelected = false;
    
    private $prettyFilterUrl;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'parent_id', 'sort', 'creation_time', 'update_time'], 'required'],
            [['parent_id', 'sort'], 'integer'],
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
            'alias' => Yii::t('app', 'Alias'),
            'parent_id' => Yii::t('app', 'Вид тегу'),
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
    public function getTagsAssocs()
    {
        return $this->hasMany(TagsAssoc::className(), ['tag_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagsInfos()
    {
        return $this->hasMany(TagsInfo::className(), ['record_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(TagsInfo::className(), ['record_id' => 'id'])->where([TagsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoData()
    {
        return $this->hasOne(TagsInfo::className(), ['record_id' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(self::className(), ['parent_id' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentTag()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    }    
    
    public function getBlogPosts()
    {
        return $this->hasMany(Blog::className(), ['id' => 'record_id'])
            ->via('tagsAssocs',function (\yii\db\ActiveQuery $q) {
                $q->where(['table_name' => Blog::tableName()]);
            });
    }
    
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id' => 'record_id'])
            ->via('tagsAssocs',function (\yii\db\ActiveQuery $q) {
                $q->where(['table_name' => Products::tableName()]);
            });
    }
    
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'record_id'])
            ->via('tagsAssocs',function (\yii\db\ActiveQuery $q) {
                $q->where(['table_name' => Category::tableName()]);
            });
    }
    
    /**
     * @inheritdoc
     * @return \app\models\Queries\Tags the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Tags(get_called_class());
    }
	
    public function getPrettyFilterUrl()
    {
        return $this->prettyFilterUrl;
    }
    
    public function setPrettyFilterUrl($value) 
    {
        $this->prettyFilterUrl = $value;
    }
    
    public function getCosmeticUrl()
    {   
        $brandAlias = Yii::$app->cosmeticCatalog->brand->alias;
        $brandId = Yii::$app->cosmeticCatalog->brand->id;
        $line = Yii::$app->cosmeticCatalog->line;
        $prettyFilterUrl = $this->PrettyFilterUrl;
        if ($prettyFilterUrl) {
            return Url::to(["/cosmetic/{$brandAlias}/b{$brandId}/$line/filter/{$prettyFilterUrl}"]);
        } else {
            return Url::to(["/cosmetic/{$brandAlias}/b{$brandId}/$line"]);
        }
        
    }
    
    public function getBlogUrl()
    {   
        return Url::to(["/blog/{$this->alias}/t{$this->id}"]);
    }
    
    public function getEquipmentUrl()
    {   
        return Url::to(["/equipment/{$this->alias}/t{$this->id}"]);
    }
    
    public function getEquipmentCategoryUrl()
    {   
        $categoryAlias = Yii::$app->equipmentCatalog->category->alias;
        return Url::to(["/equipment/$categoryAlias/{$this->alias}/t{$this->id}"]);
    }
}
