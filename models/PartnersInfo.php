<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $sub_title
 * @property string $description
 * @property string $text
 *
 * @property Partners $record
 */
class PartnersInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name', 'sub_title', 'description', 'text'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['description', 'text'], 'string'],
            [['name', 'sub_title'], 'string', 'max' => 250],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => Partners::className(), 'targetAttribute' => ['record_id' => 'id']],
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
            'sub_title' => Yii::t('app', 'Sub Title'),
            'description' => Yii::t('app', 'Description'),
            'text' => Yii::t('app', 'Text'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Partners::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\PartnersInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\PartnersInfo(get_called_class());
    }
}
