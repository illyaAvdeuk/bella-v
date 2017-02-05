<?php

namespace app\controllers;

use Yii;
use app\models\Shedule;

class StudyController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionShedule()
    {
        $event = Shedule::find()->joinWith('info')
                ->orderBy('pub_date ASC')
                ->where(['>','pub_date',date('Y-m-d')])
                ->active()
                ->one();
        
        if (empty($event)) {
            $event = Shedule::find()->joinWith('info')
                ->orderBy('pub_date DESC')
                ->active()
                ->one();
        }
        
        return $this->render('shedule',[
            'event' => $event
        ]);
    }
    
}
