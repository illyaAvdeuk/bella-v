<?php

namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class EventsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionGetEvents()
    {
        $q = Yii::$app->request->get('q','');
        $events = \app\models\EventsInfo::find()->select(['title as name'])
                ->where(['like','title',$q])
                ->andWhere(['lang' => \app\models\Lang::getCurrentId()])
                ->limit(10)
                ->asArray()
                ->all();
        if ($events) {
            return [
                'answer' => true,
                'data' => $events
            ];            
        } else {
            return [
                'answer' => false
            ];
        } 
    }
}
