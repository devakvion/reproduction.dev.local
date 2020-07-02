<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use frontend\assets\AppAsset;

class AppAssetManWoman extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    /* public $css = [
         'css/woman-men.css',
     ];*/
    public $js = [
       // 'js/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js',
        //'/js/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js',
       // 'js/human-item-manWoman.js',
        //'js/viewport-checker/dist/jquery.viewportchecker.min.js',
        'js/problem.new.js'
    ];
    public $depends = [
        'frontend\assets\AppAsset',
    ];
    public $jsOptions = [
        'defer' => 'defer',
    ];
}