<?php

namespace app\helpers;

/**
 * Description of TreeHelper
 *
 * @author user
 */
class TreeHelper 
{
    public static function searchTreeIds($items)
    {	
	$result = [];
        foreach($items as $item){
		$result[] = $item['id'];
		if(isset($item['items'])){
                    $result = array_merge($result, self::searchTreeIds($item['items']));
		}
	}
	return $result;
    }
    
    public static function buildTree($items,$index)
    {
	$result = [];
	foreach ($items[$index] as $key => $element) {
		$result[$key]=$element;
		if (isset($items[$key])) {
                    $result[$key]['items'] = self::buildTree($items,$key);
                }
	}
	return $result;	
    }
    
    public static function buildRelationItems($items)
    {
	$result = [];
        foreach ($items as $item) {
            $result[$item->parent_id][$item->id] = [
                'id' => $item->id,
                'alias' => $item->alias,
                'item' => $item
            ];
        }
	return $result;	
    }
    
    public static function searchTreeIdsByTopItems($items, $topAliases = [])
    {
        $result = [];
        foreach ($items as $item) {
            if (in_array($item['alias'],$topAliases)) {
                $result[] = $item['id'];
                $result = array_merge($result,self::searchTreeIds($item['items']));
            }
        }
        return $result;
    }
    
    
    public static function searchTreeIdsByNestedAlias($items, $nestedAliases = [])
    {
        $result = [];
        foreach ($items as $item) {
            if ($item['alias'] == $nestedAliases['alias']
                    && isset($nestedAliases['item'])) {
                $result[] = $item['id'];
                $result = array_merge($result,self::searchTreeIdsByNestedAlias($item['items'],$nestedAliases['item']));
            } elseif ($item['alias'] == $nestedAliases['alias']) {
                $result[] = $item['id'];
                if (isset($item['items'])) {
                    $result = array_merge($result,self::searchTreeIds($item['items']));
                }
            }
        }
        return $result;
    }
}
