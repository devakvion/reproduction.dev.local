<?php

namespace app\modules\faq\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\components\Helpers;
use backend\models\Faq;

/**
 * FaqController implements the CRUD actions for Faq model.
 */
class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    /**
     * Lists all Faq models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Faq::find()->orderBy('active ASC, order DESC'),
            'pagination' => [
                'pageSize' => 1000,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Faq model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Faq model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Faq();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
                $response = ['create' => true, 'href' => '/faq/default/update/' . $model->id, 'linkId' => 'faq-update'];
            } else {
                $response = ['title' => 'Ошибка сохранения данных', 'errors' => $model->getErrors()];
            }
            return $response;//$this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('_form', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Faq model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($model->save()){
                $response = ['save' => true, 'title' => 'Подтверждение', 'text' => 'Данные успешно сохранены'];
            } else {
                $response = ['title' => 'Ошибка при сохранении данных', 'errors' => $model->getErrors()];
            }
            return $response;//$this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('_form', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Faq model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $dataProvider = new ActiveDataProvider([
            'query' => Faq::find()->orderBy('order DESC'),
            'pagination' => [
                'pageSize' => 1000,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Faq model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Faq the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Faq::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSetOrder()
    {
        $model = new Faq;
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
}
