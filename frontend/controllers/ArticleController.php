<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Article;

class ArticleController extends Controller
{
    private $articlesLimit = 9;

    public function actionIndex()
    {
        $model = Article::find()->where(['active' => 1])->orderBy('date DESC')->limit($this->articlesLimit)->all();
        Yii::$app->view->params['seoTableName'] = 'article';
        Yii::$app->view->params['seoTableId'] = 0;

        return $this->render('index', ['model' => $model]);
    }

    public function actionArticles()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $model = Article::find()
            ->where(['active' => 1])
            ->orderBy('date DESC')
            ->limit($this->articlesLimit)
            ->offset($this->articlesLimit * $page)
            ->all();
        return count($model) > 0 ? $this->renderPartial('_articles', ['model' => $model]) : false;
    }

    public function actionFull($slug)
    {
        $model = Article::find()->where('active = :active and slug = :slug', ['active' => 1, 'slug' => $slug])->one();
        Yii::$app->view->params['seoTableName'] = 'article';
        Yii::$app->view->params['seoTableId'] = $model->id;

        return $this->render('full', ['model' => $model]);
    }
}