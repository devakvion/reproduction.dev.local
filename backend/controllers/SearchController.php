<?php

namespace backend\controllers;

use backend\models\Product;
use backend\models\Solution;
use Yii;
use backend\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class SearchController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $frontViewsPath = Yii::getAlias('@frontend/views/');
        Yii::$app->db->createCommand()->truncateTable('for_search')->execute();

        $products = Product::find()->where(['active' => 1])->orderBy('id ASC')->all();
        foreach ($products AS $product) {
            $productViewPath = $frontViewsPath . 'site/_' . $product->slug . '.php';
            $productText = preg_replace('!\s+!', ' ', strip_tags(file_get_contents($productViewPath)));
            $insert = Yii::$app->db->createCommand()
                ->insert('for_search', [
                    'type' => 'product',
                    'slug' => '/nashi_produkty/' . $product->slug,
                    'title' => $product->title,
                    'text' => $productText
                ])->execute();
            if (1 != $insert) echo $product->title . '<br>';
        }

        $categories = Category::find()->with('solutions')->orderBy('order DESC')->all();
        foreach ($categories AS $category) {
            $categoryViewPath = $frontViewsPath . 'problem/' . $category->slug . '/';
            foreach ($category->solutions AS $problem) {
                $problemViewPath = $categoryViewPath . $problem->slug . '.php';
                $problemText = preg_replace('!\s+!', ' ', strip_tags(file_get_contents($problemViewPath)));
                $insert = Yii::$app->db->createCommand()
                    ->insert('for_search', [
                        'type' => 'problem',
                        'slug' => '/' . $category->slug . '/' . $problem->slug,
                        'title' => $problem->title,
                        'text' => $problemText
                    ])->execute();
                if (1 != $insert) echo $problem->title . '<br>';
            }
        }
    }

}
