<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review_types".
 * Its Deprecated Table!!!!!!! Remove it after check
 * 
 * @property integer $id
 * @property string $alias
 * @property string $name
 * @property integer $sort
 * @property string $creation_time
 * @property string $update_time
 */
class ReviewTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'name', 'sort', 'creation_time', 'update_time'], 'required'],
            [['sort'], 'integer'],
            [['alias', 'name', 'creation_time', 'update_time'], 'string', 'max' => 250],
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
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
    
    
    /**
     * @inheritdoc
     * @return \app\models\queries\ReviewTypes the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\ReviewTypes(get_called_class());
    }
}
