<?php

namespace app\behaviors;

use yii\base\Behavior;

class ThumbBehavior extends Behavior
{
    /**
     * Get thumb path
     */    
    public function getThumbPath()
    {
        $table_name=$this->owner->tableName();
        $path="images/$table_name/{$this->owner->id}.1.b.jpg";
        if(file_exists($path)) {
            return "/$path";
        } else {
            return false;
        }
    }
    
    public function getThumbPathSm()
    {
        $table_name=$this->owner->tableName();
        $path="images/$table_name/{$this->owner->id}.1.s.jpg";
        if(file_exists($path)) {
            return "/$path";
        } else {
            return false;
        }
    }
    
    public function getThumbPathOrDef($def_path)
    {
        $table_name=$this->owner->tableName();
        $path="images/$table_name/{$this->owner->id}.1.b.jpg";
        if(file_exists($path)) {
            return "/$path";
        } else {
            return $def_path;
        }
    }
}
