<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lang".
 *
 * @property integer $id
 * @property string $url
 * @property string $local
 * @property string $name
 * @property integer $default
 * @property integer $created_at
 * @property integer $updated_at
 */
class Lang extends \yii\db\ActiveRecord
{
	
	static $current = null;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'local', 'name', 'created_at', 'updated_at'], 'required'],
            [['default', 'created_at', 'updated_at'], 'integer'],
            [['url', 'local'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => Yii::t('app', 'Url'),
            'local' => Yii::t('app', 'Local'),
            'name' => Yii::t('app', 'Name'),
            'default' => Yii::t('app', 'Default'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\Lang the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Lang(get_called_class());
    }
    
    static function getCurrent()
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    static function getCurrentId()
    {
        return self::getCurrent()->id; // for multiLang
    }

    static function setCurrent($url = null)
    {
        $language = self::getLangByUrl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;

        Yii::$app->language = self::$current->local;
    }

    static function getDefaultLang()
    {
        return self::find()->getDefault();
    }

    static function getLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = self::find()->byUrl($url);
            if ( $language === null ) {
                return null;
            }else{
                return $language;
            }
        }
    }
}

