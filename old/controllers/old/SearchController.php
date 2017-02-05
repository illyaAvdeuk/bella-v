<?php

namespace app\controllers;

use Yii;
use app\models\Products;
use yii\data\Pagination;

class SearchController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        $s = Yii::$app->request->get('s',false);
        if (!empty($s)) {
            $query = Products::find()
                        ->joinWith('info')
                        ->where(["like", "name",  addslashes($s)])
                        ->andWhere(['not',['brand_id' => null]])
                        ->limit(20);
            
            // Pagination
            $countQuery = clone $query;
            $totalCount = $countQuery->count('products.id');
            unset($countQuery);
            $pages = new Pagination(['totalCount' => $totalCount]);
            $pages->setPageSize(20);
            $query->offset($pages->offset)->limit($pages->limit);
            
            $products = $query->all();
        } else {
            $products = [];
            $pages = new Pagination(['totalCount' => 0]);
        }
        return $this->render('index',[
            'products' => $products,
            'pages' => $pages    
        ]);
    }

}
