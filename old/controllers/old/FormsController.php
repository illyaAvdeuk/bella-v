<?php

namespace app\controllers;

use Yii;

class FormsController extends \app\extentions\BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'add' => ['post'],
                ],
            ],
        ];
    }
    
    public function actionAdd()
    {
        $form = Yii::$app->forms->addForm();
        if ($form) {
            return $this->render('add-form-success',[
                'form' => $form
            ]);
        } else {
            return $this->render('add-form-error');
        }
    }

}
