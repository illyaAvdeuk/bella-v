<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock_categories".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property StockCategoriesInfo[] $stockCategoriesInfos
 */
class StockCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias'], 'required'],
            [['parent_id', 'sort'], 'integer'],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(StockCategoriesInfo::className(), ['record_id' => 'id'])
                ->where([StockCategoriesInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\StockCategories the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StockCategories(get_called_class());
    }
}
