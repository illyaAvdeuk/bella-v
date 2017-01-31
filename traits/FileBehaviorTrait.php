<?php

namespace app\traits;
    
/**
 * Description of FileBehavior
 *
 * @author Pavlo
 */
trait FileBehaviorTrait {
    /**
    * Get image path
    */    
    public function getPath()
    {
        $path="userfiles/{$this->format}/{$this->filename}";
        if(file_exists($path)) {
            return "/$path";
        }
        else {
            return "";
        }
    }
}