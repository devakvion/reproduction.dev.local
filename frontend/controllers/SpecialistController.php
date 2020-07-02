<?php
namespace frontend\controllers;

use backend\models\Specialist;
use Yii;
use yii\web\Controller;

class SpecialistController extends Controller
{

    public function actionIndex()
    {
        $model = Specialist::find()->where(['active' => 1])->orderBy('date DESC')->all();
        Yii::$app->view->params['seoTableName'] = 'specialist';
        Yii::$app->view->params['seoTableId'] = 0;

        return $this->render('index', ['model' => $model]);
    }

}