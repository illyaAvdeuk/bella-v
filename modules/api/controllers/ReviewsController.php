<?php

namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class ReviewsController extends Controller
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
        $review = Yii::$app->reviews->addReview();
        if ($review) {
            return ['answer' => true,'data' => [], 'err' => ''];
        } else {
            return ['answer' => false,'data' => [], 'err' => 'review save failed'];
        }
    }
}
