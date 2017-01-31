<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;
use app\models\Page;

class ConsultingController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        $mainPage = new Page('main');
        return $this->render('index',[
            'mainPage' => $mainPage
        ]);
    }
    
    public function actionWhy()
    {
        return $this->render('why');
    }
    
    public function actionView()
    {
        if (Yii::$app->page->isPage()) {
            return $this->render('view');
        }
        throw new HttpException(404);
        
    }
    
}
