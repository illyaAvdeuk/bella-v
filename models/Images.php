<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property string $title
 * @property string $filename
 * @property string $format
 * @property string $table_name
 * @property string $record_id
 * @property integer $creation_time
 * @property integer $sort
 */
class Images extends \yii\db\ActiveRecord
{
    use \app\traits\FileBehaviorTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'filename', 'format', 'table_name', 'record_id', 'creation_time', 'sort'], 'required'],
            [['creation_time', 'sort'], 'integer'],
            [['title', 'filename', 'format', 'table_name', 'record_id'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Подпись (обязательно)'),
            'filename' => Yii::t('app', 'Назва файлу'),
            'format' => Yii::t('app', 'Файл для завантаження'),
            'table_name' => Yii::t('app', 'Таблиця'),
            'record_id' => Yii::t('app', 'ID from table'),
            'creation_time' => Yii::t('app', 'Date of creation'),
            'sort' => Yii::t('app', 'SORT'),
        ];
    }
    
//    public function behaviors()
//    {
//        return [
//            'File' => \app\behaviors\FileBehavior::className()
//        ];
//    }
	
    /**
     * @inheritdoc
     * @return \app\models\queries\Images the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Images(get_called_class());
    }
}
