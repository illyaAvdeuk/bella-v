<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $alias
 * @property string $pub_date
 * @property string $status
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property EventsInfo[] $eventsInfos
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias'], 'required'],
            [['pub_date'], 'safe'],
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
            'pub_date' => Yii::t('app', 'Pub Date'),
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
        return $this->hasOne(EventsInfo::className(), ['record_id' => 'id'])
                ->where([EventsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }

    public function getTagsAssocs()
    {
        return $this->hasMany(TagsAssoc::className(), ['record_id' => 'id'])
                ->where([TagsAssoc::tableName().'.table_name' => self::tableName()]);
    }
    
    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
                ->via('tagsAssocs');
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\Events the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Events(get_called_class());
    }
    
    /**
     * Create page url
     */    
    public function getUrl()
    {
        return Url::to(["/events/{$this->alias}/p{$this->id}"]);
    }   

    
    /**
     * Get publication date
     */
    public function getPubDate($format = 'd.m.Y')
    {
        $date=\DateTime::createFromFormat('Y-m-d',$this->pub_date);
        return $date->format($format);
    }
}
