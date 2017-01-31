<?php

namespace app\controllers;

use Yii;

class CalculatorController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionEquipment($pId = null)
    {
        Yii::$app->calculator->initComponent();
        return $this->render('equipment',[
            'products' => Yii::$app->calculator->products,
        ]);
    }
    
    public function actionProduct($pId = null)
    {
        Yii::$app->calculator->initComponent([
            'pId' => $pId
        ]);
        $this->layout = 'calculator';
        return $this->render('product',[
            'products' => Yii::$app->calculator->products,
            'product' => Yii::$app->calculator->product
        ]);
    }
    
    
}
