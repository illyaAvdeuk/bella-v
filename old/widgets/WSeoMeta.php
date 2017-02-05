<?php
namespace app\widgets;
use yii\bootstrap\Widget;
use Yii;
use app\models\Pages;
use yii\helpers\Html;

class WSeoMeta extends Widget
{	
    public function init(){
        parent::init();
    }

    public function run() {
        if (Yii::$app->page->isPage()) {
            Yii::$app->page->data->rewriteMeta();
        }
        echo Html::tag('title',Html::encode(Yii::$app->view->title)." | Alfa Spa");
        echo Html::csrfMetaTags();
    }
}