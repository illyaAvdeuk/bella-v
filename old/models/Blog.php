<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
/**
 * This is the model class for table "Blog".
 *
 * @property integer $id
 * @property string $alias
 * @property string $pub_date
 * @property integer $status
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property BlogInfo[] $BlogInfos
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'pub_date', 'status', 'sort', 'creation_time', 'update_time'], 'required'],
            [['pub_date'], 'safe'],
            [['status', 'sort'], 'integer'],
            [['alias', 'creation_time', 'update_time'], 'string', 'max' => 250]
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
            'pub_date' => Yii::t('app', 'Дата публікації'),
            'status' => Yii::t('app', 'Публікувати'),
            'sort' => Yii::t('app', 'SORT'),
            'creation_time' => Yii::t('app', 'Date of creation'),
            'update_time' => Yii::t('app', 'Date of update'),
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
        return $this->hasOne(BlogInfo::className(), ['record_id' => 'id'])->where([BlogInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoRecords()
    {
        return $this->hasMany(BlogInfo::className(), ['record_id' => 'id']);
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
     * @return \app\models\Queries\Blog the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Blog(get_called_class());
    }
    
    /**
     * Create page url
     */    
    public function getUrl()
    {
        return Url::to(["/blog/{$this->alias}/p{$this->id}"]);
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
