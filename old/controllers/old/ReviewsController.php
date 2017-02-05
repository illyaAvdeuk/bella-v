<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;
use app\models\ReviewTypes;
use yii\helpers\Url;

class ReviewsController extends \app\extentions\BaseController
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
                    'index' => ['get'],
                    'brand' => ['get'],
                    'add' => ['post'],
                ],
            ],
        ];
    }
    
    public function actionIndex($reviewType)
    {
        Yii::$app->reviews->initComponent([
            'reviewType' => $reviewType
        ]);
        
        $reviewsType = Yii::$app->reviews->reviewsType;
        if ($reviewsType) {
            return $this->render('index',[
                'reviewsType' => $reviewsType,
                'reviews' => Yii::$app->reviews->reviews,
                'pages' => Yii::$app->reviews->pagiPages
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionConsulting($alias)
    {
        Yii::$app->reviews->initComponent([
            'reviewType' => $alias
        ]);
        
        $reviewsType = Yii::$app->reviews->reviewsType;
        if ($reviewsType) {
            return $this->render('consulting',[
                'reviewsType' => $reviewsType,
                'reviews' => Yii::$app->reviews->reviews,
                'pages' => Yii::$app->reviews->pagiPages
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionPortfolio($reviewType)
    {
        Yii::$app->reviews->initComponent([
            'reviewType' => $reviewType
        ]);
        
        $reviewsType = Yii::$app->reviews->reviewsType;
        if ($reviewsType) {
            return $this->render('portfolio',[
                'reviewsType' => $reviewsType,
                'reviews' => Yii::$app->reviews->reviews,
                'pages' => Yii::$app->reviews->pagiPages
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionBrand($alias,$bId)
    {
        Yii::$app->reviews->initComponent([
            'reviewType' => $alias
        ]);
        
        $reviewsType = Yii::$app->reviews->reviewsType;
        if ($reviewsType) {
            return $this->render('brand',[
                'reviewsType' => $reviewsType,
                'reviews' => Yii::$app->reviews->reviews,
                'pages' => Yii::$app->reviews->pagiPages
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionAdd() 
    {
        $review = Yii::$app->reviews->addReview();
        if ($review) {
            return $this->render('add-review-success',[
                'review' => $review
            ]);
        } else {
            $reviewsTypeId = (int)Yii::$app->request->post('tml_type_id',0);
            $reviewsType = \app\models\Tags::findOne($reviewsTypeId);
            if ($reviewsType) {
                return $this->render('add-review-error',[
                    'reviewsType' => $reviewsType
                ]);
            }
        }
        throw new HttpException(404);
    }
    
}
