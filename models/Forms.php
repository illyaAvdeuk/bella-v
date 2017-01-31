<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forms".
 *
 * @property integer $id
 * @property string $alias
 * @property string $pub_date
 * @property string $pub_time
 * @property integer $status
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $msg
 * @property integer $form_id
 * @property string $sort
 * @property string $creation_time
 * @property string $update_time
 */
class Forms extends \yii\db\ActiveRecord
{
    public $attachFileErrors = [];
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pub_date'], 'safe'],
            [['status', 'form_id', 'sort'], 'integer'],
            [['msg'], 'string'],
            [['alias', 'pub_time', 'name', 'email', 'phone', 'creation_time', 'update_time'], 'string', 'max' => 250],
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
            'pub_time' => Yii::t('app', 'Pub Time'),
            'status' => Yii::t('app', 'Status'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'msg' => Yii::t('app', 'Msg'),
            'form_id' => Yii::t('app', 'Form ID'),
            'sort' => Yii::t('app', 'Sort'),
            'creation_time' => Yii::t('app', 'Creation Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(FormTypes::className(), ['id' => 'form_id']);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\queries\Forms the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Forms(get_called_class());
    }
    
    public function fillErrMsg()
    {
        if (!empty($this->attachFileErrors)) {
            $files = implode(',', $this->attachFileErrors);
            $this->err_msg = "Возникла ошибка при сохранении файлов: {$files}";
            if ($this->save()) {
                return true;
            }
            return false;
        } 
        return true;
    }
}
