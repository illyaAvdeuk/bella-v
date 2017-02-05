<?php
namespace app\widgets;
use yii\bootstrap\Widget;

class WWhatWeDo extends Widget
{
    public function init(){
        parent::init();
    }

    public function run() {
        return $this->render('wwd/view');	
    }
}
