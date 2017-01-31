<?php

namespace app\traits;
    
/**
 * Description of FileBehavior
 *
 * @author Pavlo
 */
trait MonthNameTrait 
{
    public function getMonthName()
    {
        $arr = explode('-',$this->pub_date);
        switch ((int)$arr[1]) {
            case 1: $name = 'января'; break;
            case 2: $name = 'февраля'; break;
            case 3: $name = 'марта'; break;
            case 4: $name = 'апреля'; break;
            case 5: $name = 'мая'; break;
            case 6: $name = 'июня'; break;
            case 7: $name = 'июля'; break;
            case 8: $name = 'августа'; break;
            case 9: $name = 'сентября'; break;
            case 10: $name = 'октября'; break;
            case 11: $name = 'ноября'; break;
            case 12: $name = 'декабря'; break;
            default: $name = $arr[1];
        }
        
        return $name;
    }
}