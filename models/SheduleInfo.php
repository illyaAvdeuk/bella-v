<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shedule_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $description
 * @property string $address
 * @property string $speaker
 *
 * @property Shedule $record
 */
class SheduleInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shedule_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name', 'description', 'address', 'speaker'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['description'], 'string'],
            [['name', 'address', 'speaker'], 'string', 'max' => 250],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shedule::className(), 'targetAttribute' => ['record_id' => 'id']],
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
            'description' => Yii::t('app', 'Description'),
            'address' => Yii::t('app', 'Address'),
            'speaker' => Yii::t('app', 'Speaker'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Shedule::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\SheduleInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\SheduleInfo(get_called_class());
    }
}
