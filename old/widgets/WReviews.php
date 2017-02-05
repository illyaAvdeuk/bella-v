<?php
namespace app\widgets;
use app\models\Reviews;
use yii\bootstrap\Widget;

class WReviews extends Widget
{
    public function init(){
        parent::init();
    }

    public function run() {
        $reviews = Reviews::find()->joinWith(['info'])
                ->home()
                ->orderBy('sort ASC')
                ->active()
                ->all();
        
        
        return $this->render('reviews/view', [
            'reviews' => $reviews
        ]);	
    }
}
