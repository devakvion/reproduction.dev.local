<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

if ('http' == $_SERVER['HTTP_X_FORWARDED_PROTO']) {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
ini_set('memory_limit', '1024M');

//defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'dev');
0 === strpos($_SERVER['HTTP_HOST'], 'beta') ? define('BETA', true) : define('BETA', false);

if ('/news' == $_SERVER["REQUEST_URI"]) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /novosti');
    exit;
}

if ('/vopros-otvet' == $_SERVER["REQUEST_URI"]) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /vopros_otvet');
    exit;
}

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);


$application = new yii\web\Application($config);
$application->run();
