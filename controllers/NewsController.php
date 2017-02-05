<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;

class NewsController extends Controller
{
      
    public function actionView()
    {
       $hello = 'hello';
       return $this->render('view', compact('hello'));
    }

}
