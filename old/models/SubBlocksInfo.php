<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_blocks_info".
 *
 * @property integer $record_id
 * @property integer $lang
 * @property string $name
 * @property string $description
 * @property string $text
 *
 * @property SubBlocks $record
 */
class SubBlocksInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_blocks_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'lang', 'name', 'description', 'text'], 'required'],
            [['record_id', 'lang'], 'integer'],
            [['description', 'text'], 'string'],
            [['name'], 'string', 'max' => 250],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubBlocks::className(), 'targetAttribute' => ['record_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => 'Record ID',
            'lang' => 'Lang',
            'name' => 'Name',
            'description' => 'Description',
            'text' => 'Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(SubBlocks::className(), ['id' => 'record_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\SubBlocksInfo the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\SubBlocksInfo(get_called_class());
    }
}
