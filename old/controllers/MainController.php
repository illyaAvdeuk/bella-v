<?php

namespace app\controllers;

class MainController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('main');
    }

}
