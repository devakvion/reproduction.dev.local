<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        'dist/css/index.css',
        //'css/index.css',
       // '/css/temp.css',

    ];
    public $js = [
        // 'dist/js/main/jquery.min.js',
       // 'js/fotorama/fotorama.min.js',
       // 'js/ScrollMagic/scrollMagic.min.js',
        'dist/js/main/fotorama.scrollMagic.min.js',
       // 'js/ScrollMagic/dev/src/plugins/debug.addIndicators.js',
        //'js/snap/snap.svg-min.js',
       // 'dist/js/main/fotorama.snap.min.js',



       // 'js/jquery.transit-master/jquery.transit.min.js',
       // 'js/mobile-menu/classie.mobile.min.js',


        'dist/js/main/transit.mob-menu.match.min.js',

        //'js/response.js-master/response.min.js',



        //'js/intro.js/intro.js',
       // 'dist/js/main/transit.mob-menu.match.resp.intro.min.js',




       // 'js/jquery.transit-master/jquery.transit.min.js',
       // 'js/mobile-menu/classie.mobile.min.js',
       // 'js/match-height/dist/jquery.matchHeight-min.js',
       // 'js/response.js-master/response.min.js',
       // 'js/intro.js/intro.js',
       // 'dist/js/main/chat_popup.js',
       // 'support/js/compiled/chat_popup.js',



       'dist/js/main/init.new.min.js',
        //'js/init.new.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsOptions = [
        'defer' => 'defer',
    ];
}
