<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calculator".
 *
 * @property integer $id
 * @property string $alias
 * @property string $name
 * @property integer $product_id
 * @property integer $min_price
 * @property integer $max_price
 * @property integer $step
 * @property integer $proc_per_day
 * @property string $bonus
 * @property integer $consumables
 * @property integer $product_price
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 */
class Calculator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calculator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'name', 'product_id', 'min_price', 'max_price', 'step', 'proc_per_day', 'bonus', 'consumables', 'product_price', 'sort', 'creation_time', 'update_time'], 'required'],
            [['product_id', 'min_price', 'max_price', 'step', 'proc_per_day', 'consumables', 'product_price', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['bonus'], 'number'],
            [['alias', 'name'], 'string', 'max' => 250],
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
            'name' => Yii::t('app', 'Name'),
            'product_id' => Yii::t('app', 'Product ID'),
            'min_price' => Yii::t('app', 'Min Price'),
            'max_price' => Yii::t('app', 'Max Price'),
            'step' => Yii::t('app', 'Step'),
            'proc_per_day' => Yii::t('app', 'Proc Per Day'),
            'bonus' => Yii::t('app', 'Bonus'),
            'consumables' => Yii::t('app', 'Consumables'),
            'product_price' => Yii::t('app', 'Product Price'),
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\Calculator the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Calculator(get_called_class());
    }
}
