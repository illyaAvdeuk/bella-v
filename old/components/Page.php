<?php
namespace app\components;
  
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use app\models\Pages;
use app\models\SubBlocks;
use yii\helpers\ArrayHelper;

class Page extends Component
{
    private $page;
    private $subBlocks;
    private $breadcrumbs = [];
    private $langRows;
    
    public function __construct()
    {
        $page = Pages::find()
                ->byUrl('/'.trim(Yii::$app->request->pathInfo,'/'))
                ->joinWith(['info'])
                ->one();
        if ($page) {
            $this->page = $page;
            $subBlocks = $page->subBlocks;
            if ($subBlocks) {
                $this->subBlocks = ArrayHelper::index($subBlocks, 'alias');
            }
        }
    }
    
    public function getData()
    {
        if (!empty($this->page)) {
            return $this->page;
        }
        return false;
    }
    
    public function isPage()
    {
        if (!empty($this->page)) {
            return true;
        }
        return false;
    }
    
    public function getPage($property)
    {
        if (!empty($this->page)) {
            return $this->page->$property;
        }
        return false;
    }
    
    public function getPageThumb()
    {
        if (!empty($this->page)) {
            return $this->page->thumbPath;
        }
        return false;
    }
    
    public function getPageInfo($property)
    {
        if (!empty($this->page->info)) {
            return $this->page->info->$property;
        }
        return false;
    }
    
    public function isSubBlock($alias,$property = 'id')
    {
        if (!empty($this->subBlocks) 
                && isset($this->subBlocks[$alias]) 
                && !empty($this->subBlocks[$alias]->$property)) {
            return true;
        }
        return false;
    }
    
    public function getSubBlock($alias,$property)
    {
        if (!empty($this->subBlocks) 
                && isset($this->subBlocks[$alias])) {
            return $this->subBlocks[$alias]->$property;
        }
        return false;
    }
    
    public function getSubBlockThumb($alias)
    {
        if (!empty($this->subBlocks) 
                && isset($this->subBlocks[$alias])) {
            return $this->subBlocks[$alias]->thumbPath;
        }
        return false;
    }
    
    public function getSubBlockThumbOrDef($alias,$path)
    {
        if (!empty($this->subBlocks) 
                && isset($this->subBlocks[$alias])) {
            return $this->subBlocks[$alias]->thumbPath;
        }
        return $path;
    }
    
    public function isSubBlockInfo($alias,$property)
    {
        if (!empty($this->subBlocks)
                && isset($this->subBlocks[$alias])
                && isset($this->subBlocks[$alias]->info)
                && isset($this->subBlocks[$alias]->info->$property)
                && !empty($this->subBlocks[$alias]->info->$property)) {
            return true;
        }
        return false;
    }
    
    public function getSubBlockInfo($alias, $property, $stripTags = false)
    {
        if (!empty($this->subBlocks)
                && isset($this->subBlocks[$alias])
                && isset($this->subBlocks[$alias]->info)
                && isset($this->subBlocks[$alias]->info->$property)) {
            $value = $this->subBlocks[$alias]->info->$property;
            return ((!$stripTags) ? $value : strip_tags($value));
        }
        return false;
    }
    
    public function getBreadcrumbs()
    {
        if (!empty($this->page)) {
            return $this->genBreadcrumbs();
        }
        return false;
    }
    
    private function genBreadcrumbs()
    {
        if (empty($this->breadcrumbs)) {
            $this->buildBreadcrumbs(Pages::findOne($this->page->parent_id));
        }
        return $this->breadcrumbs;
    }
    
    private function buildBreadcrumbs($page)
    {
        if ($page) {
            if ($page->parent_id != -1) {
                array_unshift($this->breadcrumbs,$page);
                $this->buildBreadcrumbs(Pages::findOne($page->parent_id));
            } else {
                array_unshift($this->breadcrumbs,$page);
            }
        
            return true;    
        }
        return false;
    }
    
    public function getSeoText()
    {
        if (!empty($this->page) && !empty($this->page->info->seo_text)) {
            return $this->page->info->seo_text;
        }
        return false;
    }
    
    public function setLangRows($value)
    {
        $this->langRows = $value;
    }
    
    public function getLangRows()
    {
        if (!empty($this->langRows)) {
            return $this->langRows;
        }
        return false;
    }
}