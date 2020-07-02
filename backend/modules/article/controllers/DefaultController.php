<?php

namespace app\modules\article\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\components\Helpers;
use backend\models\Article;
use backend\models\Seo;

/**
 * ArticleController implements the CRUD actions for Article model.
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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Article::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
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
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->slug = Helpers::toSlug($model->title);
            if ($model->save()) {
                $seo = new Seo;
                $seo->table_name = 'article';
                $seo->table_id = $model->id;
                $seo->title = $model->title;
                $seo->description = '';
                $seo->keywords = '';
                $seo->save();
                $response = ['create' => true, 'href' => '/article/default/update/' . $model->id, 'linkId' => 'article-update'];
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
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $img_big = $model->img_big;
        $img_small = $model->img_small;
        $pdf = $model->pdf;

        if ($model->load(Yii::$app->request->post())) {
            $model->img_big = $img_big;
            $model->img_small = $img_small;
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
     * Deletes an existing Article model.
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
            'query' => Article::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUploadImg($id)
    {
        $types = ['big', 'small'];
        if (isset($_GET['type']) && in_array($_GET['type'], $types)) {
            $type = $_GET['type'];
        } else {
            throw new NotFoundHttpException('Error type.');
        }
        $model = $this->findModel($id);
        $model->actionLoadImage = true;
        $imgDir = Yii::getAlias($model->imageDirAbsolute) . '/' . $model->id . '/';
        if (!is_dir($imgDir)) {
            mkdir($imgDir, 0777, true);
            chmod($imgDir, 0777);
        }
        if (is_file($imgDir . $model->{'img_' . $type})) {
            unlink($imgDir . $model->{'img_' . $type});
        }
        if (empty($_FILES['Article'])) {
            throw new NotFoundHttpException('No files found for upload.');
        }

        $image = Yii::$app->image->load($_FILES['Article']['tmp_name']['img_' . $type]);
        $imgName = md5(microtime() . $_FILES['Article']['name']['img_' . $type]) . '.' . Helpers::getExtension($_FILES['Article']['name']['img_' . $type]);
        while (file_exists($imgDir . $imgName)) {
            $imgName = md5(microtime() . $_FILES['Article']['name']['img_' . $type]) . '.' . Helpers::getExtension($_FILES['Article']['name']['img_' . $type]);
        }
        if ('big' == $type) {
            $image->resize($model->imageBigWidth, NULL, $image::PRECISE)->save($imgDir . $imgName);
        } else {
            $image->resize($model->imageSmallWidth, NULL, $image::PRECISE)->save($imgDir . $imgName);
        }

        $model->{'img_' . $type} = $imgName;
        Yii::$app->response->format = Response::FORMAT_JSON;
        if ($model->save()) {
            return Yii::$app->params['frontUrl'] . $model->imageDir . $model->id . '/' . $imgName;
        } else {
            return ['title' => 'Ошибка при сохранении данных', 'errors' => $model->getErrors()];
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
        if (empty($_FILES['Article'])) {
            throw new NotFoundHttpException('No files found for upload.');
        }

        $fileName = md5(microtime() . $_FILES['Article']['name']['pdf']) . '.' . Helpers::getExtension($_FILES['Article']['name']['pdf']);
        while (file_exists($fileDir . $fileName)) {
            $fileName = md5(microtime() . $_FILES['Article']['name']['pdf']) . '.' . Helpers::getExtension($_FILES['Article']['name']['pdf']);
        }
        move_uploaded_file($_FILES['Article']['tmp_name']['pdf'], $fileDir . $fileName);
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
