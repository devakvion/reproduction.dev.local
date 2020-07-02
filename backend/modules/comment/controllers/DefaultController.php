<?php

namespace app\modules\comment\controllers;

use Yii;
use backend\models\Comment;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use backend\components\Helpers;

class DefaultController extends Controller
{
    /**
     * Lists all Comment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comment::find()->orderBy('active ASC, date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Comment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Comment;

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->date = date('d/m/Y');
            $model->img_big = '';
            $model->img_small = '';
            $model->lead = '';
            $model->text = '';
            $model->slug = '';
            $model->tags = '';
            $model->gender = 0;
            if ($model->save()) {
                $response = ['create' => true, 'href' => '/comment/default/update/' . $model->id, 'linkId' => 'comment-update'];
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
     * Updates an existing Comment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $img_small = $model->img_small;

        if ($model->load(Yii::$app->request->post())) {
            $model->img_small = $img_small;
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->save()) {
                $response = ['save' => true, 'title' => 'Подтвержение', 'text' => 'Данные сохраненны'];
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
     * Deletes an existing Comment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $dataProvider = new ActiveDataProvider([
            'query' => Comment::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->renderPartial('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Comment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Comment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Comment::findOne($id)) !== null) {
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
        if (empty($_FILES['Comment'])) {
            throw new NotFoundHttpException('No files found for upload.');
        }

        $image = Yii::$app->image->load($_FILES['Comment']['tmp_name']['img_' . $type]);
        $imgName = md5(microtime() . $_FILES['Comment']['name']['img_' . $type]) . '.' . Helpers::getExtension($_FILES['Comment']['name']['img_' . $type]);
        while (file_exists($imgDir . $imgName)) {
            $imgName = md5(microtime() . $_FILES['Comment']['name']['img_' . $type]) . '.' . Helpers::getExtension($_FILES['Comment']['name']['img_' . $type]);
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
            return ['title' => 'Ошибка сохранения данных', 'errors' => $model->getErrors()];
        }
    }

    public function actionDeleteImg($id)
    {
        $model = $this->findModel($id);
        $img = Yii::getAlias($model->imageDirAbsolute) . '/' . $id . '/' . $model->img_small;
        if (is_file($img)) unlink($img);
        $model->img_small = '';
        Yii::$app->response->format = Response::FORMAT_JSON;
        if ($model->save()) {
            return ['action' => true];
        } else {
            $errors = $model->getErrors();
            $errorsToView = '';
            foreach ($errors AS $error) {
                $errorsToView .= '<br>' . $error[0];
            }
            return ['title' => 'Ошибка сохранения данных', 'errors' => $errorsToView];
        }
    }
}
