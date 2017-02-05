<?php

namespace app\helpers;

/**
 * Description of TreeHelper
 *
 * @author user
 */
class ContentHelper extends \yii\helpers\Html
{
    public static function productFeature($feature, $side = 'left') 
    {
        if (!empty($feature)) {
            $html = <<<EOT
                <div class="b-product-promo__cell b-product-promo__cell--$side">
                        <div class="b-product-promo__text">
                                $feature
                                <div class="b-product-promo__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
EOT;
        } else {
            $html = <<<EOT
                <div class="b-product-promo__cell b-product-promo__cell--$side">
                        <div class="b-product-promo__text">
                                Решение задач любой  сложности
                                <div class="b-product-promo__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
EOT;
        }
        return $html;
    }
    
    /**
     * $isActive = is--active or null
     * @param type $text
     * @param type $pane
     * @param type $isActive
     * @return type
     */
    public static function productTabContent($text, $pane = '1', $isActive = '') 
    {
        if (!empty($text)) {
            $html = <<<EOT
                <div id="pane_$pane" class="g-tabs__pane js-pane $isActive">
                        $text
                </div>
EOT;
        } else {
            $html = <<<EOT
                <div id="pane_$pane" class="g-tabs__pane js-pane $isActive">
                        <h3>Описание товара:</h3>
                        <p>Товар предназначен для ухода за возрастн...</p>
                </div>
EOT;
        }
        return $html;
    }
    
    /**
     * $isActive = is--active or null
     * @param type $text
     * @param type $pane
     * @param type $isActive
     * @return type
     */
    public static function productTab($pane = '1', $isActive = '') 
    {
        switch ((int)$pane) {
            case 1: $tabLable = 'Описание'; break;
            case 2: $tabLable = 'Применение'; break;
            case 3: $tabLable = 'Ингредиенты'; break;
            case 4: $tabLable = 'Награды'; break;
            default: $tabLable = 'Описание';
            
        }
        
        $html = <<<EOT
            <li class="g-tabs__item $isActive">
                <a href="#pane_$pane" class="g-tabs__link js-tab-link">$tabLable</a>
            </li>            
EOT;
        return $html;
    }
    
    public static function seoText($seoText = '') 
    {
        if ($seoText) {
            $html = <<<EOT
            <div class="b-seo is-fadeIn is-animated">
                <div class="b-seo__content">
                    $seoText
                </div>
            </div>            
EOT;
            return $html;    
        } else {
            return false;
        }
        
        
    }
}
