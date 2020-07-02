<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\SqlDataProvider;

class SearchController extends Controller
{

    public function actionIndex($query = null)
    {
        $query = trim($query);
        if (3 > mb_strlen($query, 'UTF-8')) {
            return $this->render('index', ['dataProvider' => false, 'query' => false]);
        } else {
            $queries = explode(' ', $query);
            $from = '(
            SELECT id, type, slug, title, text FROM `for_search`
            UNION
            SELECT id, "faq" AS type, CONCAT("/vopros-otvet/", id) AS slug, question AS title, answer AS text FROM `faq`
            UNION
            SELECT id, "comment" AS type, CONCAT("/otzyvy/", id) AS slug, title, text FROM `comment`
            UNION
            SELECT id, "news" AS type, CONCAT("/novosti/", slug) AS slug, title, text FROM `news`
            UNION
            SELECT id, "article" AS type, CONCAT("/statyi/", slug) AS slug, title, text FROM `article`
        )';
            $where = 'WHERE';
            $i = 0;
            foreach ($queries AS $q) {
                ++$i;
                if (1 < $i) $where .= ' OR';
                $where .= ' t.title LIKE :query' . $i . ' OR t.text LIKE :query' . $i;
                $params[':query' . $i] = '%' . $q . '%';
            }
            $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM ' . $from . ' AS t ' . $where, $params)->queryScalar();

            $dataProvider = new SqlDataProvider([
                'sql' => 'SELECT t.* FROM ' . $from . ' AS t ' . $where,
                'params' => $params,
                'totalCount' => $totalCount,
                'sort' => false,
                'pagination' => [
                    'pageSize' => 10,
                ],
            ]);
            Yii::$app->view->params['seoTableName'] = 'search';
            return $this->render('index', ['dataProvider' => $dataProvider, 'query' => $query, 'totalCount' => $totalCount]);
        }
    }

}