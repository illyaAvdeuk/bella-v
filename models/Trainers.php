<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trainers".
 *
 * @property integer $id
 * @property string $alias
 * @property string $status
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property TrainersInfo[] $trainersInfos
 */
class Trainers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias'], 'required'],
            [['status', 'sort'], 'integer'],
            [['alias', 'creation_time', 'update_time'], 'string', 'max' => 250],
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
        return $this->hasOne(TrainersInfo::className(), ['record_id' => 'id'])
            ->where([TrainersInfo::tableName().'.lang' => Lang::getCurrentId()]);;
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\Trainers the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Trainers(get_called_class());
    }
}
