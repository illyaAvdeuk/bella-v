<?php
namespace app\components;
  
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use app\models\Products;
use app\models\Calculator;

class CalculatorComponent extends Component
{
 
    private $products = [];
    private $product;
    private $selectedDays;
    private $selectedPerDay;
    private $selectedPrice;
    
    private $bonus;
    private $profitPerDay;
    private $profitPerMonth;
    private $profitPerYear;
    
    public function initComponent($params = []) 
    {
        if (!empty($params['pId'])) {
            $productId = (int)substr($params['pId'], 1);
            $this->product = Products::find()->where(['products.id'=>$productId])
                ->joinWith(['info','brand.info'])
                ->joinWith('calculate',true,'INNER JOIN')
                ->one();
            $this->products = Products::find()
                ->joinWith('info')
                ->joinWith('calculate',true,'INNER JOIN')
                ->joinWith('brand.info')
                ->andWhere(['not',['products.id'=> $this->product->id]])
                ->all();
        } else {
            $this->products = Products::find()
                ->joinWith('info')
                ->joinWith('calculate',true,'INNER JOIN')
                ->joinWith('brand.info')
                ->all();
        }
    }
    
    public function getProducts()
    {
        if (empty($this->products)) {
            $this->products = Products::find()
                ->joinWith('info')
                ->joinWith('calculate',true,'INNER JOIN')
                ->joinWith('brand.info')
                ->all();
            return $this->products;
        }
        return $this->products;
    }
    
    public function getProduct()
    {
        if (!empty($this->product)) {
            return $this->product;
        }
        return false;
    }
    
    
    public function getSelectedDays()
    {
        if (empty($this->selectedDays)) {
            $getParam = Yii::$app->request->get('rangeSlider_1',false);
            if ($getParam) {
                $this->selectedDays = $getParam;
            } else {
                $this->selectedDays = 30;
            }
            return $this->selectedDays;
        }
        return $this->selectedDays;
    }
    
    public function getSelectedPerDay()
    {
        if (empty($this->selectedPerDay)) {
            $getParam = Yii::$app->request->get('rangeSlider_2',false);
            if ($getParam) {
                $this->selectedPerDay = $getParam;
            } else {
                $this->selectedPerDay = 1;
            }
            return $this->selectedPerDay;
        }
         return $this->selectedPerDay;
    }
    
    public function getSelectedPrice()
    {
        if (empty($this->selectedPrice)) {
            $getParam = Yii::$app->request->get('rangeSlider_3',false);
            if ($getParam) {
                $this->selectedPrice = $getParam;
            } else {
                $this->selectedPrice = $this->product->calculate->min_price;
            }
            return $this->selectedPrice;
        }
        return $this->selectedPrice;
    }
    
    public function getBonus()
    {
        return $this->getSelectedPrice()*$this->product->calculate->bonus;
    }
    
    public function getProfitPerDay()
    {   
        if (empty($this->profitPerDay)) {
            $this->profitPerDay = $this->getSelectedPerDay()
                *($this->getSelectedPrice()-$this->getBonus()-$this->product->calculate->consumables);
            return $this->profitPerDay;
        }
        return $this->profitPerDay;
    }
    
    public function getProfitPerMonth()
    {
        if (empty($this->profitPerMonth)) {
            $this->profitPerMonth = $this->getProfitPerDay()
                *$this->getSelectedDays();
            return $this->profitPerMonth;
        }
        return $this->profitPerMonth; 
    }
    
    public function getProfitPerYear()
    {
        if (empty($this->profitPerYear)) {
            $this->profitPerYear = $this->getProfitPerMonth()
                *12;
            return $this->profitPerYear;
        }
        return $this->profitPerYear; 
    }
}