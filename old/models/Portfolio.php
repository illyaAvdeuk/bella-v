<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property string $alias
 * @property integer $parent_id
 * @property integer $sort
 * @property integer $creation_time
 * @property integer $update_time
 *
 * @property PortfolioInfo[] $portfolioInfos
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
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
            'alias' => Yii::t('app', 'Alias (заполнять не обязательно)'),
            'parent_id' => Yii::t('app', 'В категории'),
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
        return Url::to(["/portfolio/{$this->alias}"]);
    }
    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(PortfolioInfo::className(), ['record_id' => 'id'])->where([PortfolioInfo::tableName().'.lang' => Lang::getCurrentId()]);
    }
    
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['parent_id' => 'id'])
                ->joinWith('info');
    }
    
    /**
     * @inheritdoc
     * @return \app\models\Queries\Portfolio the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Portfolio(get_called_class());
    }
}
