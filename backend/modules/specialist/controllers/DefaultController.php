<?php

namespace app\modules\specialist\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\components\Helpers;
use backend\models\Specialist;
use backend\models\Seo;

/**
 * SpecialistController implements the CRUD actions for Specialist model.
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
     * Lists all Specialist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Specialist::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Specialist model.
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
     * Creates a new Specialist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Specialist();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
                /*$seo = new Seo;
                $seo->table_name = 'specialist';
                $seo->table_id = $model->id;
                $seo->title = $model->title;
                $seo->description = '';
                $seo->keywords = '';
                $seo->save();*/
                $response = ['create' => true, 'href' => '/specialist/default/update/' . $model->id, 'linkId' => 'article-update'];
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
     * Updates an existing Specialist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $pdf = $model->pdf;

        if ($model->load(Yii::$app->request->post())) {
            $model->pdf = $pdf;
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
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
     * Deletes an existing Specialist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        $seo = Seo::findOne(['table_name' => 'article', 'table_id' => $id]);
        $seo->delete();

        $dataProvider = new ActiveDataProvider([
            'query' => Specialist::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Specialist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Specialist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Specialist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUploadPdf($id)
    {
        $model = $this->findModel($id);
        $fileDir = Yii::getAlias($model->imageDirAbsolute) . '/' . $model->id . '/';
        if (!is_dir($fileDir)) {
            mkdir($fileDir, 0777, true);
            chmod($fileDir, 0777);
        }
        if (is_file($fileDir . $model->pdf)) {
            unlink($fileDir . $model->pdf);
        }
        if (empty($_FILES['Specialist'])) {
            throw new NotFoundHttpException('No files found for upload.');
        }

        $fileName = md5(microtime() . $_FILES['Specialist']['name']['pdf']) . '.' . Helpers::getExtension($_FILES['Specialist']['name']['pdf']);
        while (file_exists($fileDir . $fileName)) {
            $fileName = md5(microtime() . $_FILES['Specialist']['name']['pdf']) . '.' . Helpers::getExtension($_FILES['Specialist']['name']['pdf']);
        }
        move_uploaded_file($_FILES['Specialist']['tmp_name']['pdf'], $fileDir . $fileName);
        $model->pdf = $fileName;
        $model->save();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['href' => Yii::$app->params['frontUrl'] . $model->imageDir . $model->id . '/' . $fileName];
    }

    public function actionDeletePdf($id)
    {
        $model = $this->findModel($id);
        $fileDir = Yii::getAlias($model->imageDirAbsolute) . '/' . $model->id . '/';
        if (is_file($fileDir . $model->pdf)) {
            unlink($fileDir . $model->pdf);
        }
        $model->pdf = '';
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $model->save();
    }

}
