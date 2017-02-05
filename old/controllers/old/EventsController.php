<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;

class EventsController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'events' => Yii::$app->events->events,
            'pages' => Yii::$app->events->pagiPages,
        ]);
    }
    
    
    public function actionView($alias,$pId)
    {
        Yii::$app->events->initComponent([
            'pId' => $pId,
            'alias' => $alias
        ]);
        
        $event = Yii::$app->events->event;
        if ($event) {
            return $this->render('view',[
                'event' => $event,
                'lastEvents' => $event = Yii::$app->events->getEventsByLimit(6)
            ]);
        }
        throw new HttpException(404);
    }

}
