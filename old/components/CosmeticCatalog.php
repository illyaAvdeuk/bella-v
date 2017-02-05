<?php
namespace app\components;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use app\models\Brands;
use app\models\Category;
use app\models\Products;
use app\models\Tags;
use app\models\TagsAssoc;
use app\models\PrettyFilters;

class CosmeticCatalog extends Component
{
    public $prettyFilters;
    public $perPage = 10;
    public $pagiPages;
    
    private $brandId;
    private $productId;
    private $brand;
    private $brands;
    private $line;
    private $category;
    private $products;
    private $productsIds;
    private $product;
    private $catalogTags;
    private $availableTags;
    private $availableTagsIds;
    private $taggedProductsIds;
    private $parentCatalogTags;
    private $parentCatalogTagsIds;
    
    public function initComponent(array $params)
    {
        if (isset($params['bId'])) {
            $this->brandId = substr($params['bId'], 1);
            $this->brand = Brands::find()->where(['id'=>$this->brandId])
                ->joinWith('info')
                ->one();
        }
        if (isset($params['line'])) {
            $this->line = addslashes($params['line']);
            $this->category = Category::find()->where(['alias' => $this->line])->one();
        }
        if (isset($params['pId'])) {
            $this->productId = substr($params['pId'], 1);
            $this->product = Products::find()->where(['products.id'=>$this->productId])
                ->joinWith(['info','brand','category'])
                ->one();
            $this->brand = $this->product->brand;
            $this->category = $this->product->category;
            $this->line  = $this->category->alias;
        }
        if (isset($params['prettyFilters'])) {
            $this->prettyFilters = new PrettyFilters($params['prettyFilters']);
            $this->prettyFilters->initPrettyFilterUrl($this->prettyFilters->selectedTags);
        } else {
            $this->prettyFilters = new PrettyFilters('');
        }
        if (isset($params['perPage'])) {
            $this->perPage = $params['perPage'];
        }
    }
        
    public function getBrandId() 
    {
        return $this->brandId;
    }
    
    public function getBrandsByAlias(array $aliases = [])
    {
        $query = Brands::find();
        if ($aliases) {
            $query->where(['alias' => $aliases]);
        }
        $this->brands = $query->joinWith('info')->all();
        return $this->brands;
    }
    
    public function getBrands()
    {
        if (empty($this->brands)) {
             $this->brands = $this->getBrandsByAlias();
        }
        return $this->brands;
    }
    
    public function getBrand() 
    {
        if (!empty($this->brand)) {
            return $this->brand;
        }
        return false;
    }
    
    public function getLine() 
    {
        if (!empty($this->line)) {
            return $this->line;
        }
        return false;
    }
    
    public function getCategory() 
    {
        if (!empty($this->category)) {
            return $this->category;
        }
        return false;
    }
    
    public function getProduct() 
    {
        if (!empty($this->product)) {
            return $this->product;
        }
        return false;
    }
    
    public function getProductsByCategoryBrand()
    {
        if (empty($this->products) && $this->brand && $this->category) {
            $query = Products::find()->where(['parent_id' => $this->category->id])
                    ->andWhere(['brand_id' => $this->brand->id])
                    ->joinWith('info');
            $taggedProducts = $this->taggetProductsIds;
            if (!empty($this->prettyFilters->selectedTagsIds)) {
                $query->andWhere(['id' => $taggedProducts]); 
            }
            
            // Pagination
            $countQuery = clone $query;
            $totalCount = $countQuery->count('products.id');
            unset($countQuery);
            $this->pagiPages = new Pagination(['totalCount' => $totalCount]);
            $this->pagiPages->setPageSize($this->perPage);
            $query->offset($this->pagiPages->offset)->limit($this->pagiPages->limit);
            
            // db execute
            $this->products = $query->all();
            
            return $this->products;
        }
        return $this->products;
    }
    
    public function getProductsIds()
    {
        $this->productsIds = array_keys(ArrayHelper::index($this->productsByCategoryBrand, 'id'));
        return $this->productsIds;
    }
    
    public function getTaggetProductsIds()
    {
        if (!empty($this->prettyFilters->selectedTagsIds) && empty($this->taggedProductsIds)) {
            $tagsIds = $this->prettyFilters->selectedTagsIds;
            $products = Products::find()->select('products.id')
                    ->joinWith('taggedProducts')
                    ->andWhere(['tag_id' => $tagsIds])
                    ->groupBy(Products::tableName().'.id')
                    ->having("COUNT(`".Products::tableName()."`.`id`)=".count($tagsIds))
                    ->asArray()
                    ->all();
            $this->taggedProductsIds = array_keys(ArrayHelper::index($products, 'id'));
        }
        return $this->taggedProductsIds;
                
    }
    
    public function getCatalogTags() 
    {
        if (empty($this->catalogTags)) {
            $tags = Tags::find()->where([
                        'tags.alias' => ['pokazaniya','categories']
                    ])
                    ->joinWith(['children chld' => function(\yii\db\ActiveQuery $q) {
                        $q->joinWith(['info','parentTag parent']);
                    }])
                    ->joinWith(['infoData inf' => function(\yii\db\ActiveQuery $q) {
                        $q->where(['inf.lang' => \app\models\Lang::getCurrentId()]);
                    }])
                    ->all();
                    
            foreach ($tags as $tag) {
                $this->prettyFilters->initPrettyFilterUrl($tag->children);
            }
                    
            $this->catalogTags = $tags;
            $this->initCatalogTagsByAvailable();
        }
        
        return $this->catalogTags; 
    }
    
    public function getParentCatalogTags()
    {
        if (empty($this->parentCatalogTags)) {
            $this->parentCatalogTags = Tags::find()->where([
                        'tags.alias' => ['pokazaniya','categories']
                    ])
                    ->joinWith('info')
                    ->all();
            
            return $this->parentCatalogTags;
        }
        
        return $this->parentCatalogTags;
    }
    
    public function getParentCatalogTagsIds()
    {
        if (empty($this->parentCatalogTagsIds)) {
            $this->parentCatalogTagsIds = array_keys(ArrayHelper::index($this->getParentCatalogTags(), 'id'));
            return $this->parentCatalogTagsIds;
        }
        
        return $this->parentCatalogTagsIds;
    }
    
    public function getAvailableTagsIds() 
    {
        if (empty($this->availableTagsIds)) {
            $availableTags = TagsAssoc::find()
                    ->andWhere("[[table_name]]='products'")
                    ->andWhere(['record_id' => $this->getProductsIds()])
                    ->select('tag_id')
                    ->groupBy('tag_id')
                    ->asArray()
                    ->all();
            $this->availableTagsIds = array_keys(ArrayHelper::index($availableTags, 'tag_id'));
            return $this->availableTagsIds;
        }
        return $this->availableTagsIds;
    }
    
    public function getAvailableTags() 
    {
        if (empty($this->availableTags)) {
            $availableTagsIds = $this->getAvailableTagsIds();
            $tags = Tags::find()
                    ->joinWith(['children chld' => function(\yii\db\ActiveQuery $q) use ($availableTagsIds) {
                        $q->joinWith(['info','parentTag parent']);
                        if ($availableTagsIds) {
                            $q->onCondition(['chld.id' => $availableTagsIds]); 
                        }
                    }])
                    ->joinWith(['infoData inf' => function(\yii\db\ActiveQuery $q) {
                        $q->where(['inf.lang' => \app\models\Lang::getCurrentId()]);
                    }])
                    ->andWhere(['tags.id' => $this->getParentCatalogTagsIds()])
                    ->all();
                    
            foreach ($tags as $tag) {
                $this->prettyFilters->initPrettyFilterUrl($tag->children);
            }
            $this->availableTags = $tags;
            return $this->availableTags;
        }
        
        return $this->availableTags;
    }
    
    public function initCatalogTagsByAvailable()
    {
        foreach ($this->getCatalogTags() as $parentTag) {
            foreach ($parentTag->children as $tag ) {
                if (!in_array($tag->id, $this->getAvailableTagsIds())) {
                    $tag->isAvailable = false;
                }
                if (in_array($tag->id, $this->prettyFilters->selectedTagsIds)) {
                    $tag->isSelected = true;
                }
            }
        }
        
        return true;
    }
}