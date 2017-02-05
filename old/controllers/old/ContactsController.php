<?php

namespace app\controllers;

class ContactsController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
