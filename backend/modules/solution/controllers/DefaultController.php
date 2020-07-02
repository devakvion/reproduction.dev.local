<?php

namespace app\modules\solution\controllers;

use backend\models\Content;
use Yii;
use yii\web\Controller;
use backend\models\Category;
use backend\models\Solution;
use yii\web\Response;
use yii\web\NotFoundHttpException;


class DefaultController extends Controller
{
    public function actionIndex()
    {
        $categories = Category::find()->orderBy('order DESC')->all();
        $solutions = Solution::find()->orderBy('category_id ASC, order DESC')->all();
        return $this->renderPartial('index', ['categories' => $categories, 'solutions' => $solutions]);
    }

    public function actionSetOrder()
    {
        $model = new Solution;
        $itemsId = array_filter(explode(';', $_POST['items']));
        $orderMax = count($itemsId);
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
            foreach ($itemsId AS $itemId) {
                $sql = 'UPDATE ' . $model->tableName() . ' SET `order`=' . $orderMax . ' WHERE id=' . (int)$itemId;
                $db->createCommand($sql)->execute();
                --$orderMax;
            }
            $transaction->commit();
            $result = true;
        } catch (\Exception $e) {
            $transaction->rollback();
            $result = false;
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $result;
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
                $response = ['save' => true, 'title' => 'Подтверждение', 'text' => 'Данные успешно сохранены'];
            } else {
                $response = ['title' => 'Ошибка при сохранении данных', 'errors' => $model->getErrors()];
            }
            return $response;//$this->redirect(['view', 'id' => $model->id]);
        } else {
            $content = Content::find()->where(['table_name' => 'solution', 'table_id' => $id])->orderBy('id ASC')->all();
            return $this->renderAjax('_form', [
                'model' => $model,
                'content' => $content,
            ]);
        }
    }

    protected function findModel($id)
    {
        if (($model = Solution::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested solution does not exist.');
        }
    }

    public function actionUpdateContent($id){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new Content;
        if (1==1) {
            $response = ['save' => true, 'title' => 'Подтверждение', 'text' => 'Данные успешно сохранены'];
        } else {
            $response = ['title' => 'Ошибка при сохранении данных', 'errors' => $model->getErrors()];
        }
        return $response;
    }
}
