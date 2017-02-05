<?php

namespace app\controllers;

class PrivacyController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
