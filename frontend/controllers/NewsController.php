<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\News;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $model = News::find()->where(['active' => 1])->orderBy('date DESC')->all();
        Yii::$app->view->params['seoTableName'] = 'news';

        return $this->render('index', ['model' => $model]);
    }

    public function actionFull()
    {
        return $this->render('full');
    }
}