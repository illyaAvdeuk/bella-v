<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Api',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ZUmjcnLBoYcsXL5ExZ4gv57b6EVvChUd',
            'baseUrl' => '/',	// for multiLang
            'class' => 'app\extentions\lang\LangRequest' // for multiLang
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'class'=>'app\extentions\lang\LangUrlManager', // for multiLang
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
             /*   '<reviewType:cosmetic|equipment|consulting|about>/reviews' => 'reviews/index',
                '<reviewType:portfolio>/reviews' => 'reviews/portfolio',
                'consulting/<alias:spa-wellness|salony|sanatorii|fitnes|hotels|mobile-cosmo>/reviews' => 'reviews/consulting',
                'cosmetic/<alias:[-_\w]+>/<bId:b\d+>/reviews' => 'reviews/brand',
                'cosmetic/<alias:[-_\w]+>/<pId:p\d+>' => 'cosmetic/product',
                'cosmetic/<alias:[-_\w]+>/<bId:b\d+>' => 'cosmetic/brand',
                'cosmetic/<alias:[-_\w]+>/<bId:b\d+>/<line:home|prof>' => 'cosmetic/brand-line',
                'cosmetic/<alias:[-_\w]+>/<bId:b\d+>/<line:home|prof>/filter/<filters:([-\w]+)=(([-\w]+)([,][-\w]+)*)([;]([-\w]+)=(([-\w]+)([,][-\w]+)*))*([/]?)>' => 'cosmetic/brand-line-filter',
                'portfolio/<alias:spa-wellness|fitnes|salony|sanatorii>' => 'portfolio/category',
                'portfolio/<categoryAlias:spa-wellness|fitnes|salony|sanatorii>/<alias:[-_\w]+>' => 'portfolio/view',
                'blog' => 'blog/index',
                'blog/<alias:[-_\w]+>/<pId:p\d+>' => 'blog/view',
                'blog/<alias:[-_\w]+>/<tId:t\d+>' => 'blog/tag',
                'brands/<alias:[-_\w]+>' => 'brands/view',
                'events' => 'events/index',
                'events/<alias:[-_\w]+>/<pId:p\d+>' => 'events/view',
                'stocks/<categoryAlias:[-_\w]+>' => 'stocks/category',
//                'stocks/<categoryAlias:[-_\w]+>/<alias:[-_\w]+>' => 'stocks/view',
                'calculator/equipment/<pId:p\d+>' => 'calculator/product',
                'equipment/<categoryAlias:estetic|medicine|spa-wellness|mebel>' => 'equipment/category',
                'equipment/<categoryAlias:estetic|medicine|spa-wellness|mebel>/brands' => 'equipment/category-brands',
                'equipment/<categoryAlias:[-_\w]+>/<tagAlias:[-_\w]+>/<tId:t\d+>' => 'equipment/category-technology',
                'equipment/<categoryAlias:[-_\w]+>/<brandAlias:[-_\w]+>/<bId:b\d+>' => 'equipment/category-brand',
                'equipment/<categoryAlias:[-_\w]+>/<alias:[-_\w]+>/<pId:p\d+>' => 'equipment/product',
                'equipment/<categoryAlias:[-_\w]+>/<kitAlias:[-_\w]+>/<kId:k\d+>' => 'equipment/kit',
                'equipment/<brandAlias:[-_\w]+>/<bId:b\d+>' => 'equipment/brand',
                'equipment/<tagAlias:[-_\w]+>/<tId:t\d+>' => 'equipment/tag',
                'consulting/why' => 'consulting/why',
                'consulting/<alias:[-_\w]+>' => 'consulting/view',
                '<_c>/<_a>' => '<_c>/<_a>',
                '<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>'*/
            ],
        ],
        'language'=>'ru-RU',
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                ],
            ],
        ],
     /*   'cosmeticCatalog' => [
            'class' => 'app\components\CosmeticCatalog',
        ],
        'equipmentCatalog' => [
            'class' => 'app\components\EquipmentCatalog',
        ],
        'blog' => [
            'class' => 'app\components\BlogComponent',
        ],
        'portfolio' => [
            'class' => 'app\components\PortfolioComponent',
        ],
        'page' => [
            'class' => 'app\components\Page',
        ],
        'calculator' => [
            'class' => 'app\components\CalculatorComponent',
        ],
        'reviews' => [
            'class' => 'app\components\ReviewsComponent',
        ],
        'events' => [
            'class' => 'app\components\EventsComponent',
        ],
        'stocks' => [
            'class' => 'app\components\StocksComponent',
        ],
        'forms' => [
            'class' => 'app\components\FormsComponent',
        ],*/
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
