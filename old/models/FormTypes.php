<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_types".
 *
 * @property integer $id
 * @property string $alias
 * @property string $name
 * @property integer $sort
 */
class FormTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'sort'], 'integer'],
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
            'sort' => Yii::t('app', 'Sort'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForms()
    {
        return $this->hasMany(Forms::className(), ['form_id' => 'id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\FormTypes the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\FormTypes(get_called_class());
    }
}
