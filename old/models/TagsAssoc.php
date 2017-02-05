<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tags_assoc".
 *
 * @property integer $id
 * @property string $table_name
 * @property integer $record_id
 * @property integer $tag_id
 *
 * @property Tags $tag
 */
class TagsAssoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags_assoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['table_name', 'record_id', 'tag_id'], 'required'],
            [['record_id', 'tag_id'], 'integer'],
            [['table_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'table_name' => Yii::t('app', 'Table Name'),
            'record_id' => Yii::t('app', 'Record ID'),
            'tag_id' => Yii::t('app', 'Tag ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tags::className(), ['id' => 'tag_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Pages::className(), ['id' => 'record_id'])->joinWith('info');
    }        

    /**
     * @inheritdoc
     * @return \app\models\Queries\TagsAssoc the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\TagsAssoc(get_called_class());
    }
}
