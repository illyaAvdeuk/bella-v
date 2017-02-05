<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $alias
 * @property string $email
 * @property string $link
 * @property string $pub_date
 * @property integer $type_id
 * @property integer $status
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 *
 * @property ReviewsInfo[] $reviewsInfos
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'pub_date', 'status'], 'required'],
            [['pub_date'], 'safe'],
            [['type_id', 'status', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['alias', 'email', 'link'], 'string', 'max' => 250],
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
            'email' => Yii::t('app', 'Email'),
            'link' => Yii::t('app', 'Link'),
            'pub_date' => Yii::t('app', 'Pub Date'),
            'type_id' => Yii::t('app', 'Type'),
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
        return $this->hasOne(ReviewsInfo::className(), ['record_id' => 'id'])
            ->where([ReviewsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    
    public function getReviewTags()
    {
        return $this->hasMany(TagsAssoc::className(), ['record_id' => 'id'])->where([TagsAssoc::tableName().'.table_name' => self::tableName()]);
    }
    
    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
                ->via('reviewTags');
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\Reviews the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Reviews(get_called_class());
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
