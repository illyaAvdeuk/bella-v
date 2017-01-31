<?php
namespace app\widgets;
use yii\bootstrap\Widget;
use Yii;
use yii\helpers\Html;

class WHomeScreens extends Widget
{	
    public $id;
    
    public function init(){
        parent::init();
    }

    public function run() {
        return $this->render('home-screens/'. \app\models\Lang::getCurrent()->url.'/screen'.$this->id);
    }
}