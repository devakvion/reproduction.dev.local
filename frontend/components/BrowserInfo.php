<?php
/**
 * Created by web development studio RedHex, Portugal www.redhex.pt.
 * Date: 05.10.15
 * Time: 15:06
 */

namespace frontend\components;

use Yii;
use yii\base\BootstrapInterface;
use kartik\helpers\Enum;

class BrowserInfo implements BootstrapInterface
{


    public function bootstrap($app)
    {

        if (Enum::getBrowser()['name'] == 'Microsoft Internet Explorer' & Enum::getBrowser()['version'] == 8.0) {
            Yii::$app->params['browserOld'] = true;

        }
        if (Enum::getBrowser()['name'] == 'Microsoft Internet Explorer' & Enum::getBrowser()['version'] == 9.0) {
            Yii::$app->params['browserOld9'] = true;

        }
    }


}