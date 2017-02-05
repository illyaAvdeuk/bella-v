<?php
namespace app\widgets;
use app\models\Lang;
use yii\bootstrap\Widget;

class WLang extends Widget
{
    public $view;
    
    public function init(){
        parent::init();
        switch ($this->view) {
            case "right-panel":
                break;
            default:
                $this->view = "view";
        }
    }

    public function run() {
    	return $this->render('lang/'.$this->view, [
                'current' => Lang::getCurrent(),
                'langs' => Lang::find()->active()->all(),
                'rows' => \Yii::$app->page->langRows
            ]);	
    }
}
