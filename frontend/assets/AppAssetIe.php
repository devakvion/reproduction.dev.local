<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;
use frontend\assets\AppAsset;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetIe extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      ];
    public $js = [
        'js/Columnizer/src/jquery.columnizer.js',
    ];
    public $depends = [
        'frontend\assets\AppAsset',
        ];
    public $jsOptions = [
        'defer' => 'defer',
    ];
}
