<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;
use app\models\Portfolio;

class PortfolioController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'categories' => Yii::$app->portfolio->categories
        ]);
    }
    
    public function actionCategory($alias)
    {
        Yii::$app->portfolio->initComponent([
            'categoryAlias' => $alias
        ]);
        $category = Yii::$app->portfolio->category;
        if ($category) {
            return $this->render('category',[
                'category' => $category,
                'projects' => Yii::$app->portfolio->projects,
                'pages' => Yii::$app->portfolio->pagiPages
            ]);
        }
        
        throw new HttpException(404);
    }

    public function actionView($categoryAlias, $alias)
    {
        Yii::$app->portfolio->initComponent([
            'categoryAlias' => $categoryAlias,
            'alias' => $alias
        ]);
        
        $project = Yii::$app->portfolio->project;
        $category = Yii::$app->portfolio->category;
        if ($project && $category) {
            return $this->render('view',[
                'project' => $project,
                'category' => $category
            ]);
        }
        throw new HttpException(404);
    }

}
