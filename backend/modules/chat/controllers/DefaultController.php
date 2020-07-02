<?php

namespace app\modules\chat\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\models\Chat;

/**
 * ChatController implements the CRUD actions for Chat model.
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
     * Lists all Chat models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionQuery()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Chat::find()->select('translationid, translation')->where('translation LIKE :query')->addParams([':query' => '%' . $_POST['query'] . '%'])->orderBy('translationid ASC')->all();
        return $this->renderAjax('items', ['model' => $model]);
    }

    public function actionSaveTranslation($id){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Chat::find()->where(['translationid' => $id])->one();
        $model->translation = $_POST['translation'];
        if($model->save()){
            return true;
        } else {
            return $model->getErrors();
        }
    }

}
