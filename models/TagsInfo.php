<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tags_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $description
 *
 * @property Tags $record
 */
class TagsInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name', 'description'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 250]
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
            'name' => Yii::t('app', 'Заголовок'),
            'description' => Yii::t('app', 'Текст'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Tags::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\TagsInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\TagsInfo(get_called_class());
    }
}
