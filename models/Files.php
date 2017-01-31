<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $title
 * @property string $filename
 * @property string $format
 * @property string $table_name
 * @property string $record_id
 * @property string $creation_time
 * @property integer $sort
 */
class Files extends \yii\db\ActiveRecord
{
    use \app\traits\FileBehaviorTrait;
    
    public $acceptedFormats = [
        'jpg',
        'png',
        'doc',
        'docx',
        'pdf',
        'ppt',
        'pptx',
        'xls',
        'xlsx'
    ];
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'filename', 'format', 'table_name', 'record_id'], 'required'],
            [['sort'], 'integer'],
            [['title', 'filename', 'format', 'table_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Підпис'),
            'filename' => Yii::t('app', 'Назва файлу'),
            'format' => Yii::t('app', 'Файл для завантаження'),
            'table_name' => Yii::t('app', 'Таблиця'),
            'record_id' => Yii::t('app', 'ID from table'),
            'creation_time' => Yii::t('app', 'Date of creation'),
            'sort' => Yii::t('app', 'SORT'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\Queries\Files the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\Files(get_called_class());
    }

//    public function getFileTypeImg($class = "")
//    {
//        $path="img/filetypes/{$this->format}.png";
//        if(file_exists($path))
//            return Html::img("/$path",['class'=>$class]);
//        else
//            return "";  
//    }
//    
//    public function getFileTypeImgPath()
//    {
//        $path="img/filetypes/{$this->format}.png";
//        if(file_exists($path))
//            return "/$path";
//        else
//            return "";
//    }
    
    public function attachFile($file, $tableName, $recordId)
    {
        $result = null;
        if($file && $file->error==0 && !empty($file->size)){
            $filename_array = explode('.',$file->name);
            $format = end($filename_array);
            $name = reset($filename_array);
            if (in_array($format, $this->acceptedFormats)) {
                try {
                    $file->saveAs("userfiles/{$format}/{$file->name}");
                    $result = true;
                } catch (Exception $ex) {
                    $result = false;
                }
                if ($result) {
                    $this->title = $name;
                    $this->filename = $file->name;
                    $this->format = $format;
                    $this->table_name = $tableName;
                    $this->record_id = $recordId;
                    $this->creation_time = (string)date('U');
                    $this->sort = 1;
                    $result = $this->save();
                }
                return $result;
            }
        }
        return $result;
    }
}
