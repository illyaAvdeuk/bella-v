<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;


class NewsController extends Controller
{
 
   
   
    public function actionNew()
    {
       
        return $this->render('news/index');
    }

}
