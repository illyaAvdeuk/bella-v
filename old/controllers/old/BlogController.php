<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;

class BlogController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'posts' => Yii::$app->blog->posts,
            'pages' => Yii::$app->blog->pagiPages,
            'tags' => Yii::$app->blog->availableTags,
            'selectedTag' => false
        ]);
    }
    
    public function actionTag($alias,$tId)
    {
        Yii::$app->blog->initComponent([
            'tId' => $tId,
            'tagAlias' => $alias
        ]);
        
        $tag = Yii::$app->blog->tag;
        if ($tag) {
            return $this->render('index',[
                'posts' => Yii::$app->blog->posts,
                'pages' => Yii::$app->blog->pagiPages,
                'tags' => Yii::$app->blog->availableTags,
                'selectedTag' => $tag
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionView($alias,$pId)
    {
        Yii::$app->blog->initComponent([
            'pId' => $pId,
            'alias' => $alias
        ]);
        
        $post = Yii::$app->blog->post;
        if ($post) {
            return $this->render('view',[
                'post' => $post,
                'lastPosts' => $post = Yii::$app->blog->getPostsByLimit(6)
            ]);
        }
        throw new HttpException(404);
    }

}
