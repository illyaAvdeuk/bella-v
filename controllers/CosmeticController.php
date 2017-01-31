<?php

namespace app\controllers;

use Yii;

class CosmeticController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        $brands = Yii::$app->cosmeticCatalog->getBrandsByAlias([
            'hydropeptide',
            'oxygenbotanicals',
            'soskin',
            'skinclinic'
        ]);
        
        return $this->render('index',[
            'brands' => $brands
        ]);
    }
    
    public function actionBrand($alias,$bId)
    {
        Yii::$app->cosmeticCatalog->initComponent([
            'bId' => $bId
        ]);
        
        return $this->render('brand',[
            'brand' => Yii::$app->cosmeticCatalog->brand,
        ]);
    }
    
    public function actionBrandLine($alias,$bId,$line)
    {
        Yii::$app->cosmeticCatalog->initComponent([
            'bId' => $bId,
            'line' => $line
        ]);
        
        return $this->render('brand-line',[
            'category' => Yii::$app->cosmeticCatalog->category,
            'brand' => Yii::$app->cosmeticCatalog->brand,
            'products' => Yii::$app->cosmeticCatalog->productsByCategoryBrand,
            'tags' => Yii::$app->cosmeticCatalog->catalogTags,
            'prettyFilters' => Yii::$app->cosmeticCatalog->prettyFilters,
            'pages' => Yii::$app->cosmeticCatalog->pagiPages
        ]);
    }
    
    public function actionBrandLineFilter($alias,$bId,$line,$filters)
    {
        Yii::$app->cosmeticCatalog->initComponent([
            'bId' => $bId,
            'line' => $line,
            'prettyFilters' => $filters
        ]);
        
        return $this->render('brand-line',[
            'category' => Yii::$app->cosmeticCatalog->category,
            'brand' => Yii::$app->cosmeticCatalog->brand,
            'products' => Yii::$app->cosmeticCatalog->productsByCategoryBrand,
            'tags' => Yii::$app->cosmeticCatalog->catalogTags,
            'prettyFilters' => Yii::$app->cosmeticCatalog->prettyFilters,
            'pages' => Yii::$app->cosmeticCatalog->pagiPages
        ]);
    }
    
    public function actionProduct($alias,$pId)
    {
        Yii::$app->cosmeticCatalog->initComponent([
            'pId' => $pId
        ]);
        
        return $this->render('product',[
            'product' => Yii::$app->cosmeticCatalog->product,
            'tags' => Yii::$app->cosmeticCatalog->catalogTags,
            'prettyFilters' => Yii::$app->cosmeticCatalog->prettyFilters
        ]);
    }
}
