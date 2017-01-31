<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $status
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property TeamInfo[] $teamInfos
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'status', 'sort', 'creation_time', 'update_time'], 'required'],
            [['status', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['alias'], 'string', 'max' => 250],
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
            'status' => Yii::t('app', 'Status'),
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
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
        return $this->hasOne(TeamInfo::className(), ['record_id' => 'id'])
            ->where([TeamInfo::tableName().'.lang' => Lang::getCurrentId()]);;
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\Team the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Team(get_called_class());
    }
}
