<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_settings".
 *
 * @property integer $id
 * @property string $alias
 * @property string $name
 * @property string $value
 * @property string $text
 * @property integer $status
 * @property integer $sort
 * @property integer $creation_time
 * @property integer $update_time
 *
 * @property UserSettingsInfo[] $userSettingsInfos
 */
class UserSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'name', 'value', 'text', 'status', 'sort', 'creation_time', 'update_time'], 'required'],
            [['text'], 'string'],
            [['status', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['alias', 'name', 'value'], 'string', 'max' => 250]
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
            'name' => Yii::t('app', 'Наименование'),
            'value' => Yii::t('app', 'Текстовое поле'),
            'text' => Yii::t('app', 'Текстовое поле с автоформатированием'),
            'status' => Yii::t('app', 'Статус'),
            'sort' => Yii::t('app', 'SORT'),
            'creation_time' => Yii::t('app', 'Date of creation'),
            'update_time' => Yii::t('app', 'Date of update'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(UserSettingsInfo::className(), ['record_id' => 'id'])->where([UserSettingsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\UserSettings the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\UserSettings(get_called_class());
    }
}
