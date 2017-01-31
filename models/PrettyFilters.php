<?php

namespace app\models;

use Yii;
use app\models\Tags;
use yii\helpers\ArrayHelper;

class PrettyFilters extends \yii\base\Model
{
    public $prettyFilters;
    public $filtersArray = [];
    
    private $selectedTagsIds = [];
    private $selectedTags = [];
    
    public function __construct($prettyFilters = '')
    {
        parent::__construct();
        $this->prettyFilters = trim($prettyFilters,'/');
        $this->explodeFilters();
        $this->getSelectedTags();
    }
       
    /**
     * Explode pretty filter url
     */
    public function explodeFilters(){
        $tagGroups = explode(";",$this->prettyFilters);
        foreach($tagGroups as $element){
            if($element){
                $parentTag_filters = explode("=",$element);
                $parentTag = reset($parentTag_filters);
                $filters = explode(",",end($parentTag_filters));
                $this->filtersArray[$parentTag] = $filters;
            }
        }
        return $this->filtersArray;
    }
    
    /**
     * Implode pretty filter url
     */
    public static function implodeFilters(array $filters){
        $str="";
        foreach($filters as $key => $element){
            if( $element ){
                $params_str = implode(",",$element);
                $str.="$key=$params_str;";
            }
        }
        $str = substr($str,0,-1);
        $str.="/";
        return $str;
    }
    
    /**
     * Get ids from filter params aliases
     */
    public function getSelectedTags()
    {	
        if (empty($this->selectedTags)) {
            $aliases=[];
            foreach($this->filtersArray as $element) {
                foreach($element as $tag_alias){
                    $aliases[] = $tag_alias;
                }
            }
            if ($aliases) {
               $this->selectedTags = Tags::find()->where(['tags.alias'=>$aliases])
                       ->joinWith(['info','parentTag parent'])
                       ->orderBy('id ASC')
                       ->all();
               $this->selectedTags = ArrayHelper::index($this->selectedTags, 'id');
            }
        }
        return $this->selectedTags;
    } 
    
    public function getSelectedTagsIds()
    {
        if (empty($this->selectedTagsIds) && $this->selectedTags) {
            $this->selectedTagsIds = array_keys($this->selectedTags);
            return $this->selectedTagsIds;
        }
        return $this->selectedTagsIds;
    }
    
    public function initPrettyFilterUrl(array $tags)
    {
        foreach ($tags as $tag) {
            $filters = $this->filtersArray;
            if(isset($filters[$tag->parentTag->alias])){
                $index=array_search($tag->alias,$filters[$tag->parentTag->alias]);

                if ($index !== false) {
                    unset($filters[$tag->parentTag->alias][$index]);
                } else {
                    $filters[$tag->parentTag->alias][] = $tag->alias;
                }
            } else {
                $filters[$tag->parentTag->alias] = [$tag->alias];
            }
            $sortedFilters = $this->sort($filters, $tag);
            $prettyFilterUrl = $this->implodeFilters($sortedFilters);
            if (!empty(trim($prettyFilterUrl,'/'))) {
                $tag->prettyFilterUrl =  $prettyFilterUrl;
            } 
        }
        return $tags;
    }
    
    private function sort(array $filters, \app\models\Tags $tag) 
    {
        if (in_array($tag->id, $this->getSelectedTagsIds())) {
            return $filters;
        } else {
            $selectedTags = $this->getSelectedTags();
            $selectedTags[$tag->id] = $tag;
            ksort($selectedTags);
            
            $result = [];
            foreach ($selectedTags as $tag) {
                $result[$tag->parentTag->alias][] = $tag->alias;
            }
            return $result;
        }
    }
}

