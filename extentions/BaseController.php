<?php

namespace app\extentions;
use Yii;

class BaseController extends \yii\web\Controller
{
    public function init() {
        parent::init();
        $this->checkLangs();
    }
    
    private function checkLangs()
    {
        $resolveAction = Yii::$app->request->resolve();
        $route = false;
        if (is_array($resolveAction)) {
            $route = $resolveAction[0];
            $rows = [];
            switch ($route) {
                case 'portfolio/view':
                    $rows = \app\models\Projects::find()->where(['projects.alias' => addslashes($resolveAction[1]['alias'])])
                    ->joinWith(['infoRecords' => function(\yii\db\ActiveQuery $q){
                        $q->select(['record_id','lang']);
                    }])
                    ->one();
                    break;
                case 'blog/view':
                    $rows = \app\models\Blog::find()->where(['id'=>  addslashes(substr($resolveAction[1]['pId'], 1))])
                    ->andWhere(['alias' => addslashes($resolveAction[1]['alias'])])
                    ->active()
                    ->joinWith(['infoRecords' => function(\yii\db\ActiveQuery $q){
                        $q->select(['record_id','lang']);
                    }])
                    ->one();
                    break;
                default:
            }
            if ($rows) {
                $rows = $rows->infoRecords;
                $rows = \yii\helpers\ArrayHelper::index($rows, 'lang');
            }
            Yii::$app->page->langRows = $rows;
        }
    }
}
