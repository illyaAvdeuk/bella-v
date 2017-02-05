<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_blocks".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $hide
 * @property integer $parent_id
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property SubBlocksInfo[] $subBlocksInfos
 */
class SubBlocks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_blocks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'hide', 'parent_id', 'sort', 'creation_time', 'update_time'], 'required'],
            [['hide', 'parent_id', 'sort'], 'integer'],
            [['alias', 'creation_time', 'update_time'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'hide' => 'Hide',
            'parent_id' => 'Parent ID',
            'sort' => 'Sort',
            'creation_time' => 'Creation Time',
            'update_time' => 'Update Time',
        ];
    }
    
    public function behaviors()
    {
        return [
            'Thumb' => \app\behaviors\ThumbBehavior::className()
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(SubBlocksInfo::className(), ['record_id' => 'id'])->where([SubBlocksInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\SubBlocks the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\SubBlocks(get_called_class());
    }
}
