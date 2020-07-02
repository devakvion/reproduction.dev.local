<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'language' => 'ru',
    'name' => 'Reproduction.info',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'specialist' => [
            'class' => 'app\modules\specialist\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'article' => [
            'class' => 'app\modules\article\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'gallery' => [
            'class' => 'app\modules\gallery\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'solution' => [
            'class' => 'app\modules\solution\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'news' => [
            'class' => 'app\modules\news\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'product' => [
            'class' => 'app\modules\product\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'comment' => [
            'class' => 'app\modules\comment\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'faq' => [
            'class' => 'app\modules\faq\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'seo' => [
            'class' => 'app\modules\seo\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
        'chat' => [
            'class' => 'app\modules\chat\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'pDdUrTKP4ba4dkUMoqNxjqzHO7e2fY4s',
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
            'enableLanguageDetection' => false,
            'languages' => ['ru', 'en', 'pt'],
            'rules' => [

                '_dir/<dir:[a-zA-Z0-9-]+>/?' => 'site/index',
                '_dir/<dir:[a-zA-Z0-9-]+>/<subDir:[a-zA-Z0-9-]+>' => 'site/index',

                '<module>/<controller>/<action>/<id:\d+>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>/<slug:[a-zA-Z0-9-]+>' => '<module>/<controller>/<action>',
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ],
            ],
        ],
        'image' => [
            'class' => 'yii\image\ImageDriver',
            'driver' => 'GD',  //GD or Imagick
        ],
        'dbChat' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=reproduc_mibew', //maybe other dbms such as psql,...
            'username' => 'reproduc_db',
            'password' => 'ynX?HTeA#61C',
        ],
    ],
    'params' => $params,
];