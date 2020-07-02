<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
return [
    'language' => 'ru',
    'name' => 'reproduction.info',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'frontend\components\BrowserInfo'
    ],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [

    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\widgets\ActiveFormAsset' => false,
                'yii\validators\ValidationAsset' => false,
                'yii\web\JqueryAsset' => [
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'js' => ['dist/js/main/jquery.min.js'],
                    'jsOptions' => [
                        // 'defer' => 'defer',
                    ],

                ],
                'yii\web\YiiAsset' => [
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'js' => ['dist/js/main/yii.all.min.js'],
                    // 'js' => ['dist/js/main/yii.min.js', 'dist/js/main/yii.activeForm.min.js'],
                    'jsOptions' => [
                        'defer' => 'defer',
                    ],
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'QuurpDjLm715wAmD0EvateVhot6Bg0zl',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enableDefaultLanguageUrlCode' => false,
            'enableLanguageDetection' => false,
            'languages' => ['ru'],
            'rules' => [
                'sitemap' => 'sitemap/index',
                'sitemap.xml' => 'sitemap/index',
                '<action:(index)>' => 'site/<action>',
                '<category:(zdorovie_semejnoj_pary|muzhskoe_zdorovie|zhenskoe_zdorovie|vozrastnye_izmenenija)>' => 'problem/category',
                '<category:(zdorovie_semejnoj_pary|muzhskoe_zdorovie|zhenskoe_zdorovie|vozrastnye_izmenenija)>/<problem:[a-zA-Z0-9_]+>' => 'problem/index',
                'novosti' => 'news/index',
                'statyi' => 'article/index',
                'articles' => 'article/articles',
                'otzyvy' => 'comment/index',
                'comments' => 'comment/comments',
                'vopros_otvet' => 'faq/index',
                'gde_kupit' => 'site/pharmacy',
                'novosti/<slug:[a-zA-Z0-9_]+>' => 'news/full',
                'statyi/<slug:[a-zA-Z0-9-]+>' => 'article/full',
                'nashi_produkty/<slug:[a-zA-Z0-9_]+>' => 'site/product',
                'kontakty' => 'site/contact',
                'poisk' => 'search/index',
                'o_proizvoditele' => 'site/o_proizvoditele',
                /*'s_novim_godom' => 'advert/index',*/
                'admin' => 'site/admin',
            ],
        ],
    ],
    'params' => $params,
];
