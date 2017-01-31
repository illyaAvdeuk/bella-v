<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_settings_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name_lang
 * @property string $value_lang
 * @property string $text_lang
 *
 * @property UserSettings $record
 */
class UserSettingsInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_settings_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name_lang', 'value_lang', 'text_lang'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['text_lang'], 'string'],
            [['name_lang', 'value_lang'], 'string', 'max' => 250]
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
            'name_lang' => Yii::t('app', 'Наименование (разное для языков)'),
            'value_lang' => Yii::t('app', 'Текстовое поле (разное для языков)'),
            'text_lang' => Yii::t('app', 'Текстовое поле с автоформатированием (разное для языков)'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(UserSettings::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\UserSettingsInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\UserSettingsInfo(get_called_class());
    }
}
