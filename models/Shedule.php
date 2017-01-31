<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shedule".
 *
 * @property integer $id
 * @property string $alias
 * @property string $day
 * @property string $month
 * @property string $year
 * @property string $link
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property SheduleInfo[] $sheduleInfos
 */
class Shedule extends \yii\db\ActiveRecord
{
    use \app\traits\MonthNameTrait;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'pub_date', 'link', 'sort', 'creation_time', 'update_time'], 'required'],
            [['sort', 'creation_time', 'update_time'], 'integer'],
            [['alias', 'pub_date', 'link'], 'string', 'max' => 250],
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
            'link' => Yii::t('app', 'Link'),
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(SheduleInfo::className(), ['record_id' => 'id'])
                ->where([SheduleInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    public function getDay()
    {
        $arr = explode('-',$this->pub_date);
        return $arr[2];
    }
    
    public function getMonth()
    {
        $arr = explode('-',$this->pub_date);
        return $arr[1];
    }
    
    public function getYear()
    {
        $arr = explode('-',$this->pub_date);
        return $arr[0];
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\Shedule the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Shedule(get_called_class());
    }
}
