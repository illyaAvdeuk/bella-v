<?php

namespace app\controllers;

use app\models\Pages;
use app\models\Page;

class ServicesController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        $mainPage = new Page('main');
        return $this->render('index',[
            'mainPage' => $mainPage
        ]);
    }

}
