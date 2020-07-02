<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['devicedetect'],
    'components' => [
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'enableLanguagePersistence' => false,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<action:(login|logout)>' => 'site/<action>',
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql.internal;dbname=reproduction',
            'username' => 'reproduction',
            'password' => 'batoxeechiebeigi',
            'charset' => 'utf8',
            //кеш
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 360000,
            'schemaCache' => 'cache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'devicedetect' => [
            'class' => 'alexandernst\devicedetect\DeviceDetect'
        ],
    ],
];