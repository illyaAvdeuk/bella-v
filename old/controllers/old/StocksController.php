<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;

class StocksController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCategory($categoryAlias)
    {
        Yii::$app->stocks->initComponent([
            'categoryAlias' => $categoryAlias
        ]);
        if (Yii::$app->stocks->category) {
            return $this->render('category',[
                'category' => Yii::$app->stocks->category,
                'stocks' => Yii::$app->stocks->stocks,
                'pages' => Yii::$app->stocks->pagiPages,
                'posts' => Yii::$app->blog->getPostsByLimit(3)
            ]);
        }
        throw new HttpException(404);
    }

//    public function actionView($categoryAlias, $alias)
//    {
//        Yii::$app->stocks->initComponent([
//            'categoryAlias' => $categoryAlias,
//            'alias' => $alias
//        ]);
//        if (Yii::$app->stocks->stock) {
//            return $this->render('view',[
//                'category' => Yii::$app->stocks->category,
//                'stock' => Yii::$app->stocks->stock,
//                'posts' => Yii::$app->blog->getPostsByLimit(3)
//            ]);
//        }
//        throw new HttpException(404);
//    }

}
