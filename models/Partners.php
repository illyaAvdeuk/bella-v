<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $status
 * @property string $link
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property PartnersInfo[] $partnersInfos
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'status', 'link', 'sort', 'creation_time', 'update_time'], 'required'],
            [['status', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['alias', 'link'], 'string', 'max' => 250],
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
            'link' => Yii::t('app', 'Link'),
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
        return $this->hasOne(PartnersInfo::className(), ['record_id' => 'id'])
            ->where([PartnersInfo::tableName().'.lang' => Lang::getCurrentId()]);;
    }

    /**
     * @inheritdoc
     * @return \app\models\queries\Partners the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Partners(get_called_class());
    }
}
