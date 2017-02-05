<?php

namespace app\controllers;

use Yii;
use app\models\Brands;
use yii\web\HttpException;

class BrandsController extends \app\extentions\BaseController
{
    public function actionView($alias)
    {
        $brand = Brands::find()->joinWith('info')
                ->where(['alias' => addslashes($alias)])
                ->one();
        if ($brand) {
            return $this->render('view',[
                'brand' => $brand
            ]);
        }
        throw new HttpException(404);
    }

}
