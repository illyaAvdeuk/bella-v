<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Images;
/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property integer $sort
 * @property integer $creation_time
 * @property integer $update_time
 *
 * @property ProjectsInfo[] $folioCasesInfos
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'parent_id', 'sort', 'creation_time', 'update_time'], 'required'],
            [['parent_id', 'sort', 'creation_time', 'update_time'], 'integer'],
            [['alias'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alias' => Yii::t('app', 'Alias (заповнювати не обов`язково)'),
            'parent_id' => Yii::t('app', 'Принадлежит категории'),
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
     * Create url
     */    
    public function getUrl()
    {
        return Url::to(["/portfolio/{$this->portfolio->alias}/{$this->alias}"]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(ProjectsInfo::className(), ['record_id' => 'id'])->where([ProjectsInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoRecords()
    {
        return $this->hasMany(ProjectsInfo::className(), ['record_id' => 'id']);
    }
    
    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::className(), ['id' => 'parent_id']);
    }

    public function getAttachedImages()
    {
        return $this->hasMany(Images::className(), ['record_id' => 'id'])
            ->where([Images::tableName().'.table_name' => self::tableName()]);
    }
    /**
     * @inheritdoc
     * @return \app\models\queries\Projects the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Projects(get_called_class());
    }
}
