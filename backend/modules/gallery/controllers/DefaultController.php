<?php

namespace app\modules\gallery\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\Helpers;
use yii\web\Response;
use yii\web\Controller;
use backend\models\Gallery;

class DefaultController extends Controller
{

    public function actionIndex($dir = false)
    {

        if(!$dir) throw new NotFoundHttpException('The requested dir is missing.');
        $dirs = Yii::$app->params['dirs'];
        $pid = $dirs[$dir]['id'];
        $model = new Gallery;
        $gallery = Gallery::find()->orderBy('order DESC')->where(['pid' => $pid])->all();
        return $this->renderPartial('index_' . $dir, ['model' => $model,  'pid' => $pid, 'gallery' => $gallery]);
    }

    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUploadImg($id)
    {
        $imagesSaved = [];
        $model = new Gallery;
        $model->pid = $id;
        $imgDir = Yii::getAlias($model->imageDirAbsolute) . '/' . $model->pid . '/';
        if (!is_dir($imgDir)) {
            mkdir($imgDir, 0777, true);
            chmod($imgDir, 0777);
        }
        if (empty($_FILES['Gallery'])) {
            throw new NotFoundHttpException('No files found for upload.');
        }

        foreach ($_FILES['Gallery']['name']['img'] AS $key => $imageUploaded) {
            $imgName = md5(microtime() . $imageUploaded) . '.' . Helpers::getExtension($imageUploaded);
            while (file_exists($imgDir . $imgName)) {
                $imgName = md5(microtime() . $imageUploaded) . '.' . Helpers::getExtension($imageUploaded);
            }
            $image = Yii::$app->image->load($_FILES['Gallery']['tmp_name']['img'][$key]);
            $image->resize($model->imageWidth)->save($imgDir . $imgName);
            $model = new Gallery;
            $model->pid = $id;
            $model->img = $imgName;
            $model->save();
            $imagesSaved[$model->id] = Yii::$app->params['frontUrl'] . $model->imageDir . $model->pid . '/' . $imgName;
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $imagesSaved;
    }

    public function actionRemoveImg($id)
    {
        $model = $this->findModel($id);
        if ($model) {
            $img = Yii::getAlias($model->imageDirAbsolute) . '/' . $model->pid . '/' . $model->img;
            if (is_file($img)) {
                unlink($img);
            }
            if ($model->delete()) {
                return true;
            } else return false;
        } else return false;
    }

    public function actionSetOrder()
    {
        $model = new Gallery;
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

    public function actionSaveLink($id){
        $model = $this->findModel($id);
        $model->link = $_POST['link'];
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $model->save();
    }
}
