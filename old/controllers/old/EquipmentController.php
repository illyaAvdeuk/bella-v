<?php

namespace app\controllers;

use Yii;
use yii\web\HttpException;

class EquipmentController extends \app\extentions\BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'tags' => Yii::$app->equipmentCatalog->catalogTags,
            'brands' => Yii::$app->equipmentCatalog->brands
        ]);
    }
    
    public function actionCategory($categoryAlias)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias
        ]);
        
        $category = Yii::$app->equipmentCatalog->category;
        if ($category) {
            return $this->render('category',[
                'category' => $category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'brands' => Yii::$app->equipmentCatalog->brands
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionCategoryBrands($categoryAlias)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias
        ]);
        
        $category = Yii::$app->equipmentCatalog->category;
        if ($category) {
            return $this->render('category-brands',[
                'category' => $category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'brands' => Yii::$app->equipmentCatalog->brands
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionCategoryTechnology($categoryAlias, $tagAlias, $tId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias,
            'tagAlias' => $tagAlias,
            'tId' => $tId
        ]);
        
        $products = Yii::$app->equipmentCatalog->productsByCategoryTag;
        $kits = Yii::$app->equipmentCatalog->kitsByCategoryTag;
        if ($products || $kits) {
            return $this->render('category-tag',[
                'category' => Yii::$app->equipmentCatalog->category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'tag' => Yii::$app->equipmentCatalog->tag,
                'brands' => Yii::$app->equipmentCatalog->brands,
                'products' => $products,
                'kits' => $kits
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionCategoryBrand($categoryAlias, $brandAlias, $bId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias,
            'brandAlias' => $brandAlias,
            'bId' => $bId
        ]);
        
        $tagsProducts = Yii::$app->equipmentCatalog->tagsProductsByCategoryBrand;
        if ($tagsProducts) {
            return $this->render('category-brand',[
                'category' => Yii::$app->equipmentCatalog->category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'brands' => Yii::$app->equipmentCatalog->brands,
                'brand' => Yii::$app->equipmentCatalog->brand,
                'tagsProducts' => $tagsProducts
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionProduct($categoryAlias, $alias, $pId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias,
            'alias' => $alias,
            'pId' => $pId
        ]);
        
        $product = Yii::$app->equipmentCatalog->product;
        if ($product) {
            return $this->render('product',[
                'category' => Yii::$app->equipmentCatalog->category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'brands' => Yii::$app->equipmentCatalog->brands,
                'brand' => Yii::$app->equipmentCatalog->brand,
                'product' => $product
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionKit($categoryAlias, $kitAlias, $kId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'categoryAlias' => $categoryAlias,
            'kitAlias' => $kitAlias,
            'kId' => $kId
        ]);
        
        $kit = Yii::$app->equipmentCatalog->kit;
        if ($kit) {
            return $this->render('kit',[
                'category' => Yii::$app->equipmentCatalog->category,
                'tags' => Yii::$app->equipmentCatalog->categoryTags,
                'brands' => Yii::$app->equipmentCatalog->brands,
                'kit' => $kit
            ]);
        }
        throw new HttpException(404);
    }
    
    public function actionTag($tagAlias, $tId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'tagAlias' => $tagAlias,
            'tId' => $tId
        ]);
        
        return $this->render('tag',[
            'tags' => Yii::$app->equipmentCatalog->catalogTags[0]->children,
            'brands' => Yii::$app->equipmentCatalog->brands,
            'tag' => Yii::$app->equipmentCatalog->tag,
            'products' => Yii::$app->equipmentCatalog->productsByTag
        ]);
    }
    
    public function actionBrand($brandAlias, $bId)
    {
        Yii::$app->equipmentCatalog->initComponent([
            'brandAlias' => $brandAlias,
            'bId' => $bId
        ]);
        
        return $this->render('brand',[
            'tags' => Yii::$app->equipmentCatalog->catalogTags[0]->children,
            'brands' => Yii::$app->equipmentCatalog->brands,
            'brand' => Yii::$app->equipmentCatalog->brand,
            'tagsProducts' => Yii::$app->equipmentCatalog->tagsProductsByBrand
        ]);
    }
    
    public function actionBrands()
    {
        return $this->render('brands',[
            'tags' => Yii::$app->equipmentCatalog->catalogTags,
            'brands' => Yii::$app->equipmentCatalog->brands
        ]);
    }
    
    public function actionTechnologies()
    {
        return $this->render('technologies',[
            'tags' => Yii::$app->equipmentCatalog->catalogTags,
            'brands' => Yii::$app->equipmentCatalog->brands
        ]);
    }
}
