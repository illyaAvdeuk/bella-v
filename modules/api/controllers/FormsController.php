<?php

namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class FormsController extends Controller
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
            return ['answer' => true,'data' => [], 'err' => ''];
        } else {
            return ['answer' => false,'data' => [], 'err' => 'form save failed'];
        }
    }
}
