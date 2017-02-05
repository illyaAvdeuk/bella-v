<?php

namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class BlogController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionGetPosts()
    {
        $q = Yii::$app->request->get('q','');
        $posts = \app\models\BlogInfo::find()->select(['title as name'])
                ->where(['like','title',$q])
                ->andWhere(['lang' => \app\models\Lang::getCurrentId()])
                ->limit(10)
                ->asArray()
                ->all();
        if ($posts) {
            return [
                'answer' => true,
                'data' => $posts
            ];            
        } else {
            return [
                'answer' => false
            ];
        } 
    }
}
