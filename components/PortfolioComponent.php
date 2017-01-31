<?php

namespace app\components;
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use app\models\Portfolio;
use app\models\Projects;

class PortfolioComponent extends Component
{
    public $perPage = 4;
    public $pagiPages;
    
    private $categories;
    private $category;
    private $projects;
    private $project;
    
    public function initComponent(array $params)
    {
        if (isset($params['perPage'])) {
            $this->perPage = $params['perPage'];
        }
        if (isset($params['categoryAlias'])) {
            $this->category = Portfolio::find()->where(['portfolio.alias' => addslashes($params['categoryAlias'])])
                ->joinWith('info')
                ->one();
        }
        if (isset($params['alias'])) {
            $this->project = Projects::find()->where(['projects.alias' => addslashes($params['alias'])])
                ->joinWith('info')
                ->one();
        }
    }
    
    public function getCategories() 
    {
        if (empty($this->categories)) {
            $this->categories = Portfolio::find()->where(['parent_id' => -1])
                ->joinWith('info')
                ->orderBy('sort ASC')
                ->all();
            
            return $this->categories;
        }
        return $this->categories;
    }
    
    
    public function getCategory() 
    {
        if (!empty($this->category)) {
            return $this->category;
        }
        return false;
    }
    
    public function getProjects() 
    {
        if (empty($this->projects)) {
            if (empty($this->category)) {
                return false;
            }
            
            $query = Projects::find()->where(['projects.parent_id' => $this->category->id])
                    ->joinWith(['info','portfolio']);
                    
            // Pagination
            $countQuery = clone $query;
            $totalCount = $countQuery->count('projects.id');
            unset($countQuery);
            $this->pagiPages = new Pagination(['totalCount' => $totalCount]);
            $this->pagiPages->setPageSize($this->perPage);
            $query->offset($this->pagiPages->offset)->limit($this->pagiPages->limit);        
            
            // db execute
            $this->projects = $query->all();
            
            return $this->projects;
        }
        return $this->projects;
    }
    
    public function getProject() 
    {
        if (!empty($this->project)) {
            return $this->project;
        }
        return false;
    }    
}