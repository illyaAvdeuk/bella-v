<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      #  '/web/css/site.css',
       # '/web/css/slickplugin.css',
       # '/web/css/fancyboxplugin.css',
        '/web/css/base.css',
       # '/web/css/index.css',
    ];
    public $js = [
        '/web/js/jquery-3.1.1.js',
        '/web/js/jquery-ui.js',
        '/web/js/jquery.selectric.js',
        '/web/js/slick.min.js',
        '/web/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3',
        '/web/fancybox/source/jquery.fancybox.pack.js?v=2.1.5',
        '/web/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7',
        '/web/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
       # 'yii\bootstrap\BootstrapAsset',
    ];
}
