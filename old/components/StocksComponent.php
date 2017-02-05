<?php
namespace app\components;
 
 
use Yii;
use yii\base\Component;
use yii\data\Pagination;
use app\models\Stocks;
use app\models\StockCategories;

class StocksComponent extends Component
{
    public $perPage = 3;
    public $pagiPages;
    
    private $stocks = [];
    private $category;
    private $stock;
    
    public function initComponent(array $params)
    {
        if (isset($params['categoryAlias'])) {
            $this->category = StockCategories::find()->where(['alias' => addslashes($params['categoryAlias'])])
                    ->joinWith('info')
                    ->one();
        }
        if (isset($params['alias'])) {
            $this->stock = Stocks::find()->where(['stocks.alias' => addslashes($params['alias'])])
                    ->joinWith(['info','category.info'])
                    ->one();
            if ($this->stock) {
                $this->category = $this->stock->category;
            }
        }
        if (isset($params['perPage'])) {
            $this->perPage = $params['perPage'];
        }
    }
        
    public function getCategory() 
    {
        if (!empty($this->category)) {
            return $this->category;
        }
        return false;
    }
    
    public function getStock() 
    {
        if (!empty($this->stock)) {
            return $this->stock;
        }
        return false;
    }
    
    public function getStocks() 
    {
        if (empty($this->stocks) && !empty($this->category)) {
            $query = Stocks::find()
                    ->joinWith(['info','product'])
                    ->active()
                    ->orderBy('pub_date DESC')
                    ->where(['stocks.parent_id' => $this->category->id]);
            
            // Pagination
            $countQuery = clone $query;
            $totalCount = $countQuery->count('stocks.id');
            unset($countQuery);
            $this->pagiPages = new Pagination(['totalCount' => $totalCount]);
            $this->pagiPages->setPageSize($this->perPage);
            $query->offset($this->pagiPages->offset)->limit($this->pagiPages->limit);
            
            // db execute
            $this->stocks = $query->all();
            
            return $this->stocks;
        }
        return $this->stocks;
    }
}