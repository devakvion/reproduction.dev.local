<?php

namespace app\modules\seo\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\components\Helpers;
use backend\models\Seo;

/**
 * SeoController implements the CRUD actions for Seo model.
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
     * Lists all Seo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Seo::find()->orderBy('id ASC'),
            'pagination' => [
                'pageSize' => 1000,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Seo model.
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
     * Creates a new Seo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Seo();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
                $response = ['create' => true, 'href' => '/seo/default/update/' . $model->id, 'linkId' => 'seo-update'];
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
     * Updates an existing Seo model.
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
     * Deletes an existing Seo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $dataProvider = new ActiveDataProvider([
            'query' => Seo::find()->orderBy('order DESC'),
            'pagination' => [
                'pageSize' => 1000,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Seo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Seo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Seo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
