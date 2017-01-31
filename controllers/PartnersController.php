<?php

namespace app\controllers;

use app\models\Partners;

class PartnersController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
//            'partners' => Partners::find()->active()->joinWith('info')->all()
            'brands' => \app\models\Brands::find()
                    ->joinWith('info')
                    ->joinWith('issetProduct',true,'INNER JOIN')
                    ->all()
        ]);
    }

}
