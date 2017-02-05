<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property integer $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property CategoryInfo[] $categoryInfos
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
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
            'alias' => Yii::t('app', 'Alias (заповнювати не обов`язково)'),
            'parent_id' => Yii::t('app', 'В категории'),
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
        return $this->hasOne(CategoryInfo::className(), ['record_id' => 'id'])->where([CategoryInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }    
    
    public function getTaggedCategories()
    {
        return $this->hasOne(TagsAssoc::className(), ['record_id' => 'id'])->where([TagsAssoc::tableName().'.table_name' => self::tableName()]);
    }
    
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['parent_id' => 'id']);
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
    public function getParent()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    } 
    
    /**
     * @inheritdoc
     * @return \app\models\Queries\Category the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Category(get_called_class());
    }
    
    /**
     * Create product url
     */    
    public function getEquipmentKitUrl()
    {
        $categoryAlias = Yii::$app->equipmentCatalog->category->alias;
        return Url::to(["/equipment/{$categoryAlias}/{$this->alias}/k{$this->id}"]);
    }

}
