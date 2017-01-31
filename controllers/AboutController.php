<?php

namespace app\controllers;

class AboutController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
