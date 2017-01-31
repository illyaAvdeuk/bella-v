<?php

namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;
use app\models\Shedule;
/**
 * Default controller for the `api` module
 */
class SheduleController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionGetEvents()
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
        
        $shedules = Shedule::find()->orderBy('pub_date ASC')
                ->joinWith('info')
                ->where(['not',['id' => $event->id]])
                ->all();
        $array = [];
        foreach ($shedules as $shedule) {
            $pubDateArr = explode('-', $shedule->pub_date);
            $array[] = [
                'month' => $pubDateArr[1],
                'day' => $pubDateArr[2],
                'year' => $pubDateArr[0],
                'title' => $shedule->info->name,
                'description' => $shedule->info->description,
                'address' => $shedule->info->address,
                'speaker' => $shedule->info->speaker,
                'link' => $shedule->link
            ];
        }
        return [
            'events' => $array
        ];            
    }
}
