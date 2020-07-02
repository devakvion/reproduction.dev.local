<?php
namespace frontend\controllers;

use backend\models\Category;
use backend\models\Content;
use backend\models\Solution;
use Yii;
use yii\web\Controller;

class ProblemController extends Controller
{

    public function actionIndex($category, $problem)
    {
        $category = Category::find()->where(['slug' => $category])->one();
        $problem = Solution::find()->where(['slug' => $problem])->one();
        Yii::$app->view->params['seoTableName'] = $problem->tableName();
        // это нужно посмотреть
       Yii::$app->view->params['seoTableId'] = $problem->id;
        $content = Content::find()->where(['table_name' => 'solution', 'table_id' => $problem->id])->orderBy('order ASC')->all();

        //print_r($problem->id);exit;
        return $this->render('index', ['category' => $category, 'problem' => $problem, 'content' => $content]);
        //return $this->render('index', ['category' => $category, 'problem' => $problem]);
    }

    public function actionCategory($category)
    {
        $category = Category::findOne(['slug' => $category]);

        if ($category) {
            $solution = Solution::findOne(['category_id' => $category->id]);
            $this->redirect(Yii::$app->urlManager->createUrl($category->slug . '/' . $solution->slug));

        } else {
            return $this->redirect('site/index', 302);
        }
    }
}