<?php
namespace frontend\controllers;

use backend\models\Category;
use backend\models\Product;
use backend\models\Article;
use Yii;
use yii\web\Controller;

class SitemapController extends Controller
{

    public function actionIndex()
    {
        $urls = [];
        $host = Yii::$app->request->hostInfo;
        $problems = Category::find()->with('solutions')->orderBy('order DESC')->all();
        $products = Product::find()->where(['active' => 1])->orderBy('id ASC')->all();
        $articles = Article::find()->where(['active' => 1])->orderBy('date DESC')->all();
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $this->renderPartial('index', [
            'host' => $host,
            'problems' => $problems,
            'products' => $products,
            'articles' => $articles
        ]);
    }
}