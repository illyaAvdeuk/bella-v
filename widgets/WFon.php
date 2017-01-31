<?php
namespace app\widgets;
use yii\bootstrap\Widget;

class WFon extends Widget
{
    public function init(){
        parent::init();
    }

    public function run() {
        return $this->render('fon/view');	
    }
}
